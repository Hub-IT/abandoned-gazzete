<?php namespace Gazzete\Kernel\Databases;
use Gazzete\Kernel\CredentialsLoader;

/**
 * @author  Rizart Dokollari
 * @version 6/27/2015
 */

abstract class Database {

	public $credentialsLoader;

	public function __construct( CredentialsLoader $credentialsLoader = null )
	{
		$this->credentialsLoader = is_null($credentialsLoader) ? (new CredentialsLoader()) : $credentialsLoader;
	}

	public abstract function getConnection();
}