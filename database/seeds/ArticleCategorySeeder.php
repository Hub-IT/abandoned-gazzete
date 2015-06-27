<?php namespace database\seeds;

use database\migrations\CreateArticleCategoryTable;
use database\migrations\CreateArticlesTable;
use database\migrations\CreateCategoriesTable;
use PDO;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class ArticleCategorySeeder extends Seeder {

	public function run()
	{

		$articleIds = $this->db->getConnection()
			->query("SELECT `" . CreateArticlesTable::$columnPrimaryKey . "` " .
				"FROM `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateArticlesTable::$tableName . "`")
			->fetchAll(PDO::FETCH_COLUMN);

		$categoryIds = $this->db->getConnection()
			->query("SELECT `" . CreateCategoriesTable::$columnPrimaryKey . "` " .
				"FROM `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateCategoriesTable::$tableName . "`")
			->fetchAll(PDO::FETCH_COLUMN);

		foreach (range(0, 3) as $index)
		{
			$articleId = $this->faker->randomElement($articleIds);
			$categoryId = $this->faker->randomElement($categoryIds);

			$query =
				"INSERT INTO `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateArticleCategoryTable::$tableName . "` " .
				"(`" . CreateArticleCategoryTable::$columnArticleId . "`, `" . CreateArticleCategoryTable::$columnCategoryId . "`) " .
				"VALUES ('$articleId', '$categoryId')";

			$this->db->getConnection()->query($query);
		}

		echo "Seed for '" . CreateArticleCategoryTable::$tableName . "' table complete.\n";
	}
}