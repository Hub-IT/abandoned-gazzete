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
				"CREATE TABLE IF NOT EXISTS `" . $this->db->credentialsLoader->getDbName() . "`.`" . self::$tableName . "` (" .
				"`" . self::$columnPrimaryKey . "` INT NOT NULL AUTO_INCREMENT," .
				"`" . self::$columnName . "` VARCHAR(90) NOT NULL," .
				"`" . self::$columnEmail . "` VARCHAR(90) NOT NULL," .
				"`" . self::$columnForeignRoleId . "` INT NOT NULL," .
				"PRIMARY KEY (`" . self::$columnPrimaryKey . "`)," .
				"UNIQUE INDEX `" . self::$columnPrimaryKey . "_UNIQUE` (`" . self::$columnPrimaryKey . "` ASC)," .
				"UNIQUE INDEX `" . self::$columnEmail . "_UNIQUE` (`" . self::$columnEmail . "` ASC)," .
				"INDEX `" . self::$columnForeignRoleId . "_idx` (`" . self::$columnForeignRoleId . "` ASC)," .
				"CONSTRAINT `FK_" . self::$columnForeignRoleId . "` " .
				"   FOREIGN KEY (`" . self::$columnForeignRoleId . "`) " .
				"   REFERENCES `" . $this->db->credentialsLoader->getDbName() . "`.`" . CreateRolesTable::$tableName . "` (`" . CreateRolesTable::$columnPrimaryKey . "`) " .
				"   ON DELETE RESTRICT" .
				"   ON UPDATE CASCADE); ")
			->execute();

		echo "Create " . self::$tableName . " table complete.\n";
	}

	protected function getTableName()
	{
		return self::$tableName;
	}
}