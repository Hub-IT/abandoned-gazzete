<?php namespace app\Kernel;

use Gazzete\Kernel\App;

class AppTest extends \PHPUnit_Framework_TestCase {

	protected $serverName;

	protected function setUp()
	{
	}

	protected function tearDown()
	{
		App::setBaseUrl(null);
	}

	// tests
	public function testReturnsBaseUrlWithoutSsl()
	{
		$_SERVER['HTTPS'] = 'off';

		$this->assertEquals('http://' . $_SERVER['SERVER_NAME'], App::getBaseURL());
	}

	// tests
	public function testReturnsBaseUrlWithSsl()
	{
		$_SERVER['HTTPS'] = 'on';

		$this->assertEquals('https://' . $_SERVER['SERVER_NAME'], App::getBaseURL());
	}

	public function testReturnsTrueWhenSllEnabled()
	{
		$_SERVER['HTTPS'] = 'on';

		$this->assertTrue(App::isSslEnabled());
	}

	public function testReturnsUrlForPath()
	{
		$_SERVER['HTTPS'] = 'off';

		$expectedUrl = 'http://' . $_SERVER['SERVER_NAME'] . '/expect';

		$this->assertEquals($expectedUrl, App::url('expect'));
	}

}