<?php namespace database\migrations;
use Gazzete\Models\Repositories\Database;
use Gazzete\Models\Repositories\MySqlDatabase;


/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */
abstract class Migration {

	protected $db;

	public static $columnCreatedAt = "created_at";
	public static $columnCreatedAtFormat = "Y-m-d H:i:s";
	public static $columnUpdatedAt = "updated_at";
	public static $columnUpdateAtFormat = "Y-m-d H:i:s";

	public function __construct( Database $db = null )
	{
		$this->db = is_null($db) ? (new MySqlDatabase()) : $db;
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
			->prepare("TRUNCATE TABLE `" . $this->db->credentialsLoader->getDbName() . "`.`" . $this->getTableName() . "`");

		$this->db->getConnection()
			->prepare("DROP TABLE IF EXISTS `" . $this->db->credentialsLoader->getDbName() . "`.`" . $this->getTableName() . "`")
			->execute();

		echo "Destroy " . $this->getTableName() . " table complete.\n";
	}


}