<?php
namespace app\Kernel;

use Gazzete\Kernel\CredentialsLoader;
use Mockery;

class CredentialsLoaderTest extends \PHPUnit_Framework_TestCase {

	private $credentialsLoader;

	private $asset;

	protected function setUp()
	{
		$this->asset = Mockery::mock('Gazzete\Helpers\Asset');
	}

	protected function tearDown()
	{
	}

	// tests
	public function test_it_returns_correct_db_host()
	{
		$expected = 'db_host';

		$this->asset->shouldReceive('fetch')->once()->andReturn(['DB_HOST' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($this->asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbHost());
	}

	public function test_it_returns_correct_db_name()
	{
		$expected = 'db_name';

		$this->asset->shouldReceive('fetch')->once()->andReturn(['DB_NAME' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($this->asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbName());
	}

	public function test_it_returns_correct_db_username()
	{
		$expected = 'db_username';

		$this->asset->shouldReceive('fetch')->once()->andReturn(['DB_USERNAME' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($this->asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbUsername());
	}

	public function test_it_returns_correct_db_password()
	{
		$expected = 'db_password';

		$this->asset->shouldReceive('fetch')->once()->andReturn(['DB_PASSWORD' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($this->asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbPassword());
	}

	public function test_it_returns_correct_db_port()
	{
		$expected = 'db_port';

		$this->asset->shouldReceive('fetch')->once()->andReturn(['DB_PORT' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($this->asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbPort());
	}

	public function test_it_returns_correct_pdo_error_mode()
	{
		$expected = 'db_error_mode';

		$this->asset->shouldReceive('fetch')->once()->andReturn(['PDO_ERROR_MODE' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($this->asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbPdoErrorMode());
	}
}