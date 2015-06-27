<?php namespace Gazzete\Kernel\Databases;

use Gazzete\Kernel\CredentialsLoader;
use PDO;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class MySqlDatabase implements Database {

	private $connection;

	private $credentialsLoader;

	public function __construct( CredentialsLoader $credentialsLoader = null )
	{
		$this->credentialsLoader = is_null($credentialsLoader) ? (new CredentialsLoader()) : $credentialsLoader;
	}

	private function createNewConnection()
	{
		try
		{
			$dbConnection = new PDO(
				"mysql:host=" . $this->credentialsLoader->getDbHost() . ";" .
				"dbname=" . $this->credentialsLoader->getDbName() . ";" .
				"port=" . $this->credentialsLoader->getDbPort(),
				$this->credentialsLoader->getDbUsername(),
				$this->credentialsLoader->getDbPassword()
			);

			$dbConnection->setAttribute(PDO::ATTR_ERRMODE, $this->credentialsLoader->getDbPdoErrorMode());

			$dbConnection->exec("SET NAMES 'utf8'");

			return $dbConnection;

		} catch (PDOException $e)
		{
			throw new Exception("Could not connect to the database . " . $e->getMessage());
		}
	}

	/**
	 * @param mixed $connection
	 */
	public function setConnection( $connection )
	{
		$this->connection = $connection;
	}

	/**
	 * @return mixed
	 */
	public function getConnection()
	{
		if ( empty( $this->connection ) )
		{
			$this->setConnection($this->createNewConnection());
		}

		return $this->connection;
	}
}