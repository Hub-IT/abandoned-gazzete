<?php namespace database\seeds;

use Faker\Factory;
use Gazzete\Models\Repositories\Database;
use Gazzete\Models\Repositories\MySqlDatabase;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
abstract class Seeder {

	protected $faker;
	protected $db;

	public function __construct( Database $db = null )
	{
		$this->db = is_null($db) ? (new MySqlDatabase()) : $db;

		$this->faker = Factory::create();
	}


	public abstract function run();

}