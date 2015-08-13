<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbhelperTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dbhelper', function($table)
		{
			$table->increments('id');
			$table->bigInteger('bigInteger');
			$table->binary('binary');
			$table->boolean('boolean');
			$table->char('char4', 4);
			$table->date('date');
			$table->dateTime('dateTime');
			$table->decimal('decimal5_2', 5, 2);
			$table->double('double15_8', 15, 8);
			$table->enum('enum', ['foo', 'bar']);
			$table->float('float');
			$table->integer('integer');
			$table->json('json');
			$table->longText('longText');
			$table->mediumInteger('mediumInteger');
			$table->mediumText('mediumText');
			$table->morphs('morphs');
			$table->smallInteger('smallInteger');
			$table->tinyInteger('tinyInteger');
			$table->softDeletes();
			$table->string('string');
			$table->string('string100', 100);
			$table->text('text');
			$table->time('time');
			$table->timestamp('timestamp');
			$table->timestamps();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbhelper');
	}

}
