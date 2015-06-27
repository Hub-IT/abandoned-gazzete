<?php namespace Gazzete\Kernel;

use Gazzete\Helpers\Asset;

/**
 * @author  Rizart Dokollari
 * @version 6/26/2015
 */
class CredentialsLoader {

	private $credentials;

	private $asset;

	public function __construct( Asset $asset = null, $credentialsFilePath = null )
	{
		$this->asset = is_null($asset) ? (new Asset()) : $asset;

		$this->load($credentialsFilePath);
	}

	/**
	 * Load App credentials (database, email & ReCaptcha credentials etc...)
	 * @param null $credentialsFilePath
	 */
	private function load( $credentialsFilePath = null )
	{
		if ( ! isset( $this->credentials ) ) # Load only if not already done so
		{
			$credentialsFilePath = is_null($credentialsFilePath) ? __DIR__ . '/../../.env.php' : $credentialsFilePath;

			$this->credentials = $this->asset->fetch($credentialsFilePath);
		}

	}

	/**
	 * @return mixed
	 */
	public function getDbHost()
	{
		$this->load();

		return $this->credentials['DB_HOST'];
	}

	/**
	 * @return mixed
	 */
	public function getDbName()
	{
		$this->load();

		return $this->credentials['DB_NAME'];
	}

	/**
	 * @return mixed
	 */
	public function getDbUsername()
	{
		$this->load();

		return $this->credentials['DB_USERNAME'];
	}

	/**
	 * @return mixed
	 */
	public function getDbPassword()
	{
		$this->load();

		return $this->credentials['DB_PASSWORD'];
	}

	/**
	 * @return mixed
	 */
	public function getDbPort()
	{
		$this->load();

		return $this->credentials['DB_PORT'];
	}

	/**
	 * @return mixed
	 */
	public function getDbPdoErrorMode()
	{
		$this->load();

		return $this->credentials['PDO_ERROR_MODE'];
	}
}