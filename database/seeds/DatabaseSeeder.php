<?php namespace database\seeds;
/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */

class DatabaseSeeder extends Seeder {

	private $rolesSeeder;

	public function __construct()
	{
		parent::__construct();

		$this->rolesSeeder = new RolesSeeder();
	}

	public function run()
	{
		$this->rolesSeeder->run();
	}
}