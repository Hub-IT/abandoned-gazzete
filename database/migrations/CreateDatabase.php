<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class CreateDatabase extends Migration {


	public function __construct()
	{
		$this->createRolesTable = new CreateRolesTable();
		$this->createArticlesTable = new CreateArticlesTable();
	}

	/**
	 * Run the migrations
	 */
	public function up()
	{
		$this->createRolesTable->up();
		$this->createArticlesTable->up();

		echo "Database migration creation complete.\n";
	}

	/**
	 * Reverse the migrations
	 */
	public function down()
	{
		$this->createArticlesTable->down();
		$this->createRolesTable->down();

		echo "Database migration destroy complete.\n";
	}
}


