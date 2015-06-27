<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class CreateDatabase {


	/**
	 *
	 */
	public function __construct()
	{
		$this->createRolesTable = new CreateRolesTable();
		$this->createUsersTable = new CreateUsersTable();
		$this->createArticlesTable = new CreateArticlesTable();
		$this->createCategoriesTable = new CreateCategoriesTable();
		$this->createArticleCategoryTable = new CreateArticleCategoryTable();
	}

	/**
	 * Run the migrations
	 */
	public function up()
	{
		$this->createRolesTable->up();
		$this->createUsersTable->up();
		$this->createArticlesTable->up();
		$this->createCategoriesTable->up();
		$this->createArticleCategoryTable->up();

		echo "Database migration creation complete.\n";
	}

	/**
	 * Reverse the migrations
	 */
	public function down()
	{
		$this->createArticleCategoryTable->down();
		$this->createArticlesTable->down();
		$this->createUsersTable->down();
		$this->createRolesTable->down();
		$this->createCategoriesTable->down();

		echo "Database migration destroy complete.\n";
	}
}


