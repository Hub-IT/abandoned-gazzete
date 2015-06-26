<?php
namespace app\Kernel;

use Gazzete\Kernel\CredentialsLoader;
use Mockery;

class CredentialsLoaderTest extends \PHPUnit_Framework_TestCase {

	private $credentialsLoader;

	protected function setUp()
	{
	}

	protected function tearDown()
	{
	}

	// tests
	public function test_it_returns_db_host()
	{
		$expected = 'db_host';

		$asset = Mockery::mock('Gazzete\Helpers\Asset');

		$asset->shouldReceive('fetch')->once()->andReturn(['DB_HOST' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbHost());
	}

	public function test_it_returns_db_name()
	{
		$expected = 'db_name';

		$asset = Mockery::mock('Gazzete\Helpers\Asset');

		$asset->shouldReceive('fetch')->once()->andReturn(['DB_NAME' => $expected]);

		$this->credentialsLoader = new CredentialsLoader($asset);

		$this->assertEquals($expected, $this->credentialsLoader->getDbName());
	}

}