<?php namespace database\migrations;
use Gazzete\Kernel\Databases\MySqlDatabase;
use Gazzete\Kernel\CredentialsLoader;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
abstract class Migration {

	protected $db;
	protected $credentialsLoader;

	public function __construct()
	{
		$this->db = new MySqlDatabase();

		$this->credentialsLoader = new CredentialsLoader();
	}

	/**
	 * Run the migrations
	 * @return mixed
	 */
	public abstract function up();

	/**
	 * Reverse the migrations
	 */
	public abstract function down();


}