<?php namespace Election;

class PartyResult {
	public $party;
	public $for = 0;
	public $shown = 0;

	public function __construct(Party $party, $shown, $for) {
		$this->party = $party;
		$this->for 	 = $for;
		$this->shown = $shown;
	}

	public static function generate($party, $policiesShown, $policiesChosen) {
		if(empty($policiesShown)) {
			return new self($party, 0, 0);
		}

		$pShown = $policiesShown->where('party_id', $party->id)->first();
		$shown = $pShown ? $pShown->total : 0;

		if(empty($policiesChosen)) {
			return new self($party, $shown, 0);
		}

		$pChosen = $policiesChosen->where('party_id', $party->id)->first();
		$chosen = $pChosen ? $pChosen->total : 0;

		return new self($party, $shown, $chosen);
	}
}
