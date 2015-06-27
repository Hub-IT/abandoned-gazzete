<?php namespace database\migrations;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class CreateArticlesTable extends Migration {

	private $tableName = "articles";
	private $columnPrimaryKey = "id";

	public function up()
	{
		$this->db->getConnection()
			->prepare(
				"CREATE TABLE IF NOT EXISTS `" . $this->credentialsLoader->getDbName() . "`.`$this->tableName` (" .
				"`$this->columnPrimaryKey` INT NOT NULL AUTO_INCREMENT," .
				"PRIMARY KEY (`$this->columnPrimaryKey`)," .
				"UNIQUE INDEX `" . $this->columnPrimaryKey . "_UNIQUE` (`$this->columnPrimaryKey` ASC));")
			->execute();

		echo "Create articles table complete.\n";
	}

	/**
	 * Reverse the migrations
	 */
	public function down()
	{
		$this->db->getConnection()
			->prepare(
				"DROP TABLE IF EXISTS `" . $this->credentialsLoader->getDbName() . "`.`$this->tableName`"
			)
			->execute();

		echo "Destroy articles table complete.\n";
	}
}