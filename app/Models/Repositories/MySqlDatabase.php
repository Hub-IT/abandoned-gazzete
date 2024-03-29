<?php namespace Gazzete\Models\Repositories;

use PDO;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class MySqlDatabase extends Database {

	private $connection;

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