<?php namespace database\migrations;
use Gazzete\Kernel\Databases\MySqlDatabase;
use Gazzete\Kernel\CredentialsLoader;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
abstract class Migration {

	protected $db;
	protected $credentialsLoader;

	protected static $columnCreatedAt = "created_at";
	protected static $columnUpdatedAt = "updated_at";

	public function __construct()
	{
		$this->db = new MySqlDatabase();

		$this->credentialsLoader = new CredentialsLoader();
	}

	protected abstract function getTableName();

	/**
	 * Run the migrations
	 * @return mixed
	 */
	public abstract function up();

	/**
	 * Reverse the migrations
	 */
	public function down()
	{
		$this->db->getConnection()
			->prepare("DROP TABLE IF EXISTS `" . $this->credentialsLoader->getDbName() . "`.`" . $this->getTableName() . "`")
			->execute();

		echo "Destroy " . $this->getTableName() . " table complete.\n";
	}


}