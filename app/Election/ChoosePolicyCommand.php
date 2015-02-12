<?php namespace Election;

use Session;

use Votemike\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class ChoosePolicyCommand extends Command implements SelfHandling {

	protected $policy;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($policy)
	{
		$this->policy = $policy;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		Session::push('election.answers', $this->policy);

		$policies = Session::get('election.policy_ids'); //policies shown in this request
		$shown 	  = Session::get('election.policies_shown', []);
		
		Session::put('election.policies_shown', array_merge($shown, $policies));
	}

}
