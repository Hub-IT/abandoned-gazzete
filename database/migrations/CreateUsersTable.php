<?php namespace database\migrations;
/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */

class CreateUsersTable extends Migration {

	public static $tableName = "users";
	public static $columnPrimaryKey = "id";
	public static $columnName = "name";
	public static $columnEmail = "email";
	public static $columnForeignRoleId = "role_id";

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
				"`" . self::$columnName . "` VARCHAR(90) NOT NULL," .
				"`" . self::$columnEmail . "` VARCHAR(90) NOT NULL," .
				"`" . self::$columnForeignRoleId . "` INT NOT NULL," .
				"PRIMARY KEY (`" . self::$columnPrimaryKey . "`)," .
				"UNIQUE INDEX `" . self::$columnPrimaryKey . "_UNIQUE` (`" . self::$columnPrimaryKey . "` ASC)," .
				"UNIQUE INDEX `" . self::$columnEmail . "_UNIQUE` (`" . self::$columnEmail . "` ASC)," .
				"INDEX `" . self::$columnForeignRoleId . "_idx` (`" . self::$columnForeignRoleId . "` ASC)," .
				"CONSTRAINT `" . self::$columnForeignRoleId . "` " .
				"   FOREIGN KEY (`" . self::$columnForeignRoleId . "`) " .
				"   REFERENCES `" . $this->credentialsLoader->getDbName() . "`.`" . CreateRolesTable::$tableName . "` (`" . CreateRolesTable::$columnPrimaryKey . "`) " .
				"   ON DELETE RESTRICT" .
				"   ON UPDATE CASCADE); ")
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

		echo "Destroy users table complete.\n";
	}
}