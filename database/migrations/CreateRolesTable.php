<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
class CreateRolesTable extends Migration {

	public static $tableName = "roles";
	public static $columnPrimaryKey = "id";
	public static $columnName = "name";

	/**
	 * Run the migrations
	 * @return mixed
	 */
	public function up()
	{
		$this->db->getConnection()
			->prepare(
				"CREATE TABLE IF NOT EXISTS `" . $this->credentialsLoader->getDbName() . "`.`" . self::$tableName . "` (" .
				"`" . self::$columnPrimaryKey . "` INT NOT NULL AUTO_INCREMENT," .
				"`" . self::$columnName . "` VARCHAR(45) NOT NULL," .
				"PRIMARY KEY (`" . self::$columnPrimaryKey . "`)," .
				"UNIQUE INDEX `" . self::$columnPrimaryKey . "_UNIQUE` (`" . self::$columnPrimaryKey . "` ASC)," .
				"UNIQUE INDEX `" . self::$columnName . "_UNIQUE` (`" . self::$columnName . "` ASC));")
			->execute();

		echo "Create articles table complete.\n";
	}

	/**
	 * Reverse the migrations
	 */
	public function down()
	{
		$this->db->getConnection()
			->prepare("DROP TABLE IF EXISTS `" . $this->credentialsLoader->getDbName() . "`.`" . self::$tableName . "`")
			->execute();

		echo "Destroy roles table complete.\n";
	}
}