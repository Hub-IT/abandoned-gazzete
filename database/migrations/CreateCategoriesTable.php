<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class CreateCategoriesTable extends Migration {

	public static $tableName = "categories";
	public static $columnPrimaryKey = "id";
	public static $columnName = "name";
	public static $columnExtImg = "ext_img";

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
				"`" . self::$columnName . "` VARCHAR(45) NOT NULL," .
				"`" . self::$columnExtImg . "` VARCHAR(45) NOT NULL," .
				"PRIMARY KEY (`" . self::$columnPrimaryKey . "`)," .
				"UNIQUE INDEX `" . self::$columnPrimaryKey . "_UNIQUE` (`" . self::$columnPrimaryKey . "` ASC)," .
				"UNIQUE INDEX `" . self::$columnName . "_UNIQUE` (`" . self::$columnName . "` ASC));")
			->execute();

		echo "Create " . self::$tableName . " table complete.\n";
	}

	protected function getTableName()
	{
		return self::$tableName;
	}
}