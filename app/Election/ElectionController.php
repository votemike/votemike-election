<?php namespace Election;

use Votemike\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class ElectionController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		Session::flush();
		return view('election.home');
	}

	/**
	 * Show the next policies page to the user to the user.
	 *
	 * @return Response
	 */
	public function policies()
	{
		$errors = Session::get('errors');
		if(isset($errors) && $errors->count()) {
			return view('election.policies', ['issue' => Session::get('election.issue'), 'policies' => Session::get('election.policies')]);
		}
		$policiesShown 	= Session::get('election.policies_shown', []);
		$issuesShown 	= Policy::whereIn('id', $policiesShown)->groupBy('issue_id')->lists('issue_id');
		$issuesPerPage 	= 4;
		$issue 			= Issue::has('policies', '>=', $issuesPerPage)->whereNotIn('issues.id', $issuesShown)->orderByRaw("RAND()")->first();
		if(empty($issue)) {
			return redirect('election/results');
		}

		$policies  = Policy::forIssue($issue->id)->take($issuesPerPage)->orderByRaw("RAND()")->get();
		$policyIds = array_map(function($policy) { return $policy['id']; }, $policies->toArray());
		Session::put('election.issue', $issue);
		Session::put('election.policies', $policies);
		Session::put('election.policy_ids', $policyIds);

		return view('election.policies', ['issue' => $issue, 'policies' => $policies]);
	}

	/**
	 * Save policy response and redirect.
	 *
	 * @return Response
	 */
	public function savePolicy(Request $request)
	{
		$bored = $request->input('button') === 'bored';

		if(!$bored) {
			$this->validate($request, [
					'policy' => 'required|exists:policies,id',
				], [
					'required' => 'Er, you need to choose one of the policies!',
					'exists' => 'Odd, that policy doesn\'t seem to exists',
				]
			);
		}

		if($request->input('policy')) {
			$this->dispatchFrom(ChoosePolicyCommand::class, $request);
		}

		if($bored) {
			return redirect('election/results');
		}

		return redirect('election/policies');
	}

	/**
	 * Show results.
	 *
	 * @return Response
	 */
	public function results()
	{
		return view('election.results', ['partyResults' => $this->getSortedResults()]);
	}

	/**
	 * Return results array of Party Result objects order by %chosen of those shown for that party
	 *
	 * @return array
	 */
	private function getSortedResults() {
		$policiesShown  = Policy::countByParty(Session::get('election.policies_shown'))->get();
		$policiesChosen = Policy::countByParty(Session::get('election.answers'))->get();

		$results = [];
		foreach(Party::all() as $party) {
			$results[] = PartyResult::generate($party, $policiesShown, $policiesChosen);
		}

		return $this->sortResults($results);
	}

	private function sortResults($results) {
		$for = $percentage = $shown = [];

		foreach ($results as $key => $result) {
			$percentage[$key]  = $result->for ? $result->for/$result->shown : 0;
			$for[$key]  = $result->for;
			$shown[$key] = $result->shown;
		}
		
		array_multisort($percentage, SORT_DESC, $for, SORT_DESC, $shown, SORT_ASC, $results);

		return $results;
	}
}
