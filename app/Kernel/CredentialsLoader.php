<?php namespace Gazzete\Kernel;

use Gazzete\Helpers\Asset;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class CredentialsLoader
{

	private $credentials;

	/**
	 * @return mixed
	 */
	public function getDbHost()
	{
		if ( ! isset ($this->credentials['DB_HOST']) ) $this->credentials['DB_HOST'] = getenv('DB_HOST');

		return $this->credentials['DB_HOST'];
	}

	/**
	 * @return mixed
	 */
	public function getDbName()
	{
		if ( ! isset ($this->credentials['DB_NAME']) ) $this->credentials['DB_NAME'] = getenv('DB_NAME');

		return $this->credentials['DB_NAME'];
	}

	/**
	 * @return mixed
	 */
	public function getDbUsername()
	{
		if ( ! isset ($this->credentials['DB_USERNAME']) ) $this->credentials['DB_USERNAME'] = getenv('DB_USERNAME');

		return $this->credentials['DB_USERNAME'];
	}

	/**
	 * @return mixed
	 */
	public function getDbPassword()
	{
		if ( ! isset ($this->credentials['DB_PASSWORD']) ) $this->credentials['DB_PASSWORD'] = getenv('DB_PASSWORD');

		return $this->credentials['DB_PASSWORD'];
	}

	/**
	 * @return mixed
	 */
	public function getDbPort()
	{
		if ( ! isset ($this->credentials['DB_PORT']) ) $this->credentials['DB_PORT'] = getenv('DB_PORT');

		return $this->credentials['DB_PORT'];
	}

	/**
	 * @return mixed
	 */
	public function getDbPdoErrorMode()
	{
		if ( ! isset ($this->credentials['PDO_ERROR_MODE']) ) $this->credentials['PDO_ERROR_MODE'] = getenv('PDO_ERROR_MODE');

		return $this->credentials['PDO_ERROR_MODE'];
	}
}