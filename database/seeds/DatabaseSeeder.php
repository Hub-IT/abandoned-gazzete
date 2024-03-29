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
		$this->usersSeeder = new UsersSeeder();
		$this->articlesSeeder = new ArticlesSeeder();
		$this->categoriesSeeder = new CategoriesSeeder();
		$this->articleCategorySeeder = new ArticleCategorySeeder();
	}

	public function run()
	{
		$this->rolesSeeder->run();
		$this->usersSeeder->run();
		$this->articlesSeeder->run();
		$this->categoriesSeeder->run();
		$this->articleCategorySeeder->run();
	}
}