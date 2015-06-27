<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class CreateArticleCategoryTable extends Migration {

	public static $tableName = "article_category";
	public static $columnPrimaryKey = "id";
	public static $columnArticleId = "article_id";
	public static $columnCategoryId = "category_id";

	/**
	 * Run the migrations
	 * @return mixed
	 */
	public function up()
	{
		$this->db->getConnection()
			->prepare(
				"CREATE TABLE IF NOT EXISTS `" . $this->db->credentialsLoader->getDbName() . "`.`" . self::$tableName . "` (" .
				"`" . self::$columnPrimaryKey . "` INT NOT NULL AUTO_INCREMENT," .
				"`" . self::$columnArticleId . "` INT NOT NULL," .
				"`" . self::$columnCategoryId . "` INT NOT NULL," .
				"PRIMARY KEY (`" . self::$columnPrimaryKey . "`)," .
				"INDEX `FK_" . CreateArticlesTable::$tableName . "_" . self::$tableName . "_idx` (`" . CreateArticlesTable::$columnPrimaryKey . "` ASC)," .
				"INDEX `FK_" . CreateCategoriesTable::$tableName . "_" . self::$tableName . "_idx` (`" . CreateCategoriesTable::$columnPrimaryKey . "` ASC)," .
				"CONSTRAINT `FK_" . CreateArticlesTable::$tableName . "_" . self::$tableName . "`" .
				"	FOREIGN KEY (`" . CreateArticlesTable::$columnPrimaryKey . "`)" .
				"	REFERENCES `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateArticlesTable::$tableName . "` (`" . CreateArticlesTable::$columnPrimaryKey . "`)" .
				"   ON DELETE RESTRICT" .
				"	ON UPDATE CASCADE," .
				"CONSTRAINT `FK_" . CreateCategoriesTable::$tableName . "_" . self::$tableName . "`" .
				"	FOREIGN KEY (`" . CreateCategoriesTable::$columnPrimaryKey . "`)" .
				"	REFERENCES `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateCategoriesTable::$tableName . "` (`" . CreateCategoriesTable::$columnPrimaryKey . "`)" .
				"   ON DELETE RESTRICT" .
				"	ON UPDATE CASCADE);")
			->execute();

		echo "Create " . self::$tableName . " table complete.\n";
	}

	protected function getTableName()
	{
		return self::$tableName;
	}
}