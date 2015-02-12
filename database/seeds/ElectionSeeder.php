<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Election\Issue;
use Election\Party;
use Election\Policy;

class ElectionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('PartiesTableSeeder');
		$this->command->info('Parties table seeded!');
		$this->call('IssuesTableSeeder');
		$this->command->info('Issues table seeded!');
		$this->call('PoliciesTableSeeder');
		$this->command->info('Policies table seeded!');
	}
}

class IssuesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('issues')->truncate();

        Issue::create(['title' => 'Economy']);
        Issue::create(['title' => 'Infrastructure']);
        Issue::create(['title' => 'Environment']);
        Issue::create(['title' => 'Employment']);
        Issue::create(['title' => 'Family']);
        Issue::create(['title' => 'Social']);
        Issue::create(['title' => 'Housing']);
        Issue::create(['title' => 'Education']);
        Issue::create(['title' => 'Health']);
        Issue::create(['title' => 'Crime']);
        Issue::create(['title' => 'UK']); //Scottish and Welsh powers?
        Issue::create(['title' => 'International']); //sercurity, hackers, commerical tax
	}
}

class PartiesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('parties')->truncate();

        Party::create(['name' => 'Conservatives']);
        Party::create(['name' => 'Labour']);
        Party::create(['name' => 'Liberal Democrats']);
        Party::create(['name' => 'Scottish National Party']);
        Party::create(['name' => 'UK Independence Party']);
        Party::create(['name' => 'Greens']);
        Party::create(['name' => 'Plaid Cymru']);
	}
}

class PoliciesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('policies')->truncate();

		Policy::create(['issue_id' => 1, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 2, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 3, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 4, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 5, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 6, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 7, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 8, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 9, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 10, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 11, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 12, 'party_id' => 1, 'description' => 'Save the rich']);

		Policy::create(['issue_id' => 1, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 2, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 3, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 4, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 5, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 6, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 7, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 8, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 9, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 10, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 11, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 12, 'party_id' => 2, 'description' => 'Save the poor']);

		Policy::create(['issue_id' => 1, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 2, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 3, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 4, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 5, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 6, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 7, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 8, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 9, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 10, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 11, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 12, 'party_id' => 3, 'description' => 'Sit on the fence']);

		Policy::create(['issue_id' => 1, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 2, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 3, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 4, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 5, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 6, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 7, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 8, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 9, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 10, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 11, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 12, 'party_id' => 4, 'description' => 'Free Scotland']);

		Policy::create(['issue_id' => 1, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 2, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 3, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 4, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 5, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 6, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 7, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 8, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 9, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 10, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 11, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 12, 'party_id' => 5, 'description' => 'Stop immigration']);

		Policy::create(['issue_id' => 1, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 2, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 3, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 4, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 5, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 6, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 7, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 8, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 9, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 10, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 11, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 12, 'party_id' => 6, 'description' => 'Save the planet']);

		Policy::create(['issue_id' => 1, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 2, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 3, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 4, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 5, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 6, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 7, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 8, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 9, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 10, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 11, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 12, 'party_id' => 7, 'description' => 'Free Wales']);
	}
}