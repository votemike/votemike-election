<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TestDbHelperNoChangeDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('NoChangeSeeder');
	}

}

class NoChangeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::unprepared('SET GLOBAL max_allowed_packet=1073741824');
		DB::table('dbhelper')->truncate();

		$record = [];
		$record['bigInteger'] = pow(2,32);
		//$record['binary'] = mysql_escape_string(file_get_contents($tmp_image));
		$record['boolean'] = 1;
		$record['char4'] = 'char';
		$record['date'] = '2012/12/31';
		$record['dateTime'] = '2012-12-31 11:30:45';
		$record['decimal5_2'] = 99999.99;
		$record['enum'] = 'foo';
		$record['float'] = 1/3;
		$record['integer'] = pow(2,24);
		$record['json'] = json_encode(array_fill(0, 30000, 'foo'));
		$record['longText'] = str_repeat('hi', pow(2,24)/2);
		$record['mediumInteger'] = pow(2,16);
		$record['mediumText'] = str_repeat('hi', pow(2,16)/2);
		$record['morphs_id'] = pow(2,24);
		$record['morphs_type'] = 'type'; 
		$record['smallInteger'] = pow(2,8);
		$record['tinyInteger'] = 2;
		$record['string'] = 'Something';
		$record['string100'] = str_repeat('hi', 50);
		$record['text'] = str_repeat('hi', pow(2,16)/2);
		$record['time'] = '11:12:00';
		$record['timestamp'] = time();

        DB::table('dbhelper')->insert(array(
			$record,
		));
	}
}
