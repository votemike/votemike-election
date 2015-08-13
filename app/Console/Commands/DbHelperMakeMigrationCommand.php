<?php namespace Votemike\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DbHelperMakeMigrationCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'dbhelper:make-migration';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generates a migration file with suggested table improvements';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire(DbHelperController)
	{
		DbHelperController::createMigrationFile();
	}
}
