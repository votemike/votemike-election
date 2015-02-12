<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parties', function($table)
		{
			$table->increments('id');
			$table->string('name', 30)->unique();
		});

		Schema::create('issues', function($table)
		{
			$table->increments('id');
			$table->string('title', 30)->unique();
		});

		Schema::create('policies', function($table)
		{
			$table->increments('id');
			$table->tinyInteger('issue_id')->references('id')->on('issues');
			$table->tinyInteger('party_id')->references('id')->on('parties');
			$table->longText('description');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('policies');
		Schema::drop('issues');
		Schema::drop('parties');
	}

}
