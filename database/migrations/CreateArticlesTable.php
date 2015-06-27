<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class CreateArticlesTable extends Migration {

	public static $tableName = "articles";
	public static $columnPrimaryKey = "id";
	public static $columnRegistrarId = "registrar_id";
	public static $columnTitle = "title";
	public static $columnContent = "content";
	public static $columnAuthorName = "author_name";
	public static $columnAuthorId = "author_id";
	public static $columnDurationRead = "duration_read";

	public function up()
	{
		$this->db->getConnection()
			->prepare(
				"CREATE TABLE IF NOT EXISTS `" . $this->credentialsLoader->getDbName() . "`.`" . self::$tableName . "` (" .
				"`" . self::$columnPrimaryKey . "` INT NOT NULL AUTO_INCREMENT," .
				"`" . self::$columnRegistrarId . "` INT NOT NULL," .
				"`" . self::$columnAuthorId . "` INT NULL," .
				"`" . self::$columnTitle . "` VARCHAR(45) NOT NULL," .
				"`" . self::$columnContent . "` LONGTEXT NOT NULL," .
				"`" . self::$columnAuthorName . "` VARCHAR(90) NOT NULL," .
				"`" . self::$columnDurationRead . "` VARCHAR(45) NULL," .
				"`" . self::$columnCreatedAt . "` DATETIME NOT NULL," .
				"`" . self::$columnUpdatedAt . "` DATETIME NOT NULL," .
				"PRIMARY KEY (`" . self::$columnPrimaryKey . "`)," .
				"UNIQUE INDEX `" . self::$columnPrimaryKey . "_UNIQUE` (`" . self::$columnPrimaryKey . "` ASC)," .
				"INDEX `" . self::$columnRegistrarId . "_id_idx` ( `" . self::$columnRegistrarId . "` ASC)," .
				"INDEX `" . self::$columnAuthorId . "_id_idx` ( `" . self::$columnAuthorId . "` ASC)," .
				"CONSTRAINT `FK_" . self::$columnRegistrarId . "`" .
				"   FOREIGN KEY (`" . self::$columnRegistrarId . "`) " .
				"   REFERENCES `" . $this->credentialsLoader->getDbName() . "`.`" . CreateUsersTable::$tableName . "` (`" . CreateUsersTable::$columnPrimaryKey . "`) " .
				"   ON DELETE RESTRICT" .
				"   ON UPDATE CASCADE," .
				"CONSTRAINT `FK_" . self::$columnAuthorId . "`" .
				"   FOREIGN KEY (`" . self::$columnAuthorId . "`) " .
				"   REFERENCES `" . $this->credentialsLoader->getDbName() . "`.`" . CreateUsersTable::$tableName . "` (`" . CreateUsersTable::$columnPrimaryKey . "`) " .
				"   ON DELETE RESTRICT" .
				"   ON UPDATE CASCADE)")
			->execute();

		echo "Create " . self::$tableName . " table complete.\n";
	}

	protected function getTableName()
	{
		return self::$tableName;
	}
}