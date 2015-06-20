<?php namespace app\Helpers;

use Gazzete\Helpers\Html;
use Gazzete\Kernel\App;

class HtmlTest extends \PHPUnit_Framework_TestCase {

	private $html;

	protected function setUp()
	{
		$this->html = new Html();
	}

	protected function tearDown()
	{
	}

	public function testReturnsCorrectLink()
	{
		$url = App::getBaseURL() . "/asset.css";

		$expected = "<link href='$url' rel='stylesheet' type='text/css' />";

		$this->assertEquals($expected, $this->html->link('asset.css'));
	}

	public function testReturnsCorrectScript()
	{
		$url = App::getBaseURL() . "/asset.js";

		$expected = "<script src='$url'></script>";

		$this->assertEquals($expected, $this->html->script('asset.js'));
	}

	public function testReturnsCorrectDocumentScript()
	{
		$url = App::getBaseURL() . "/asset.js";

		$expected = 'document.write("<script src=\'' . $url . '\'><\\/script>")';

		$this->assertEquals($expected, $this->html->documentWriteScript('asset.js'));
	}

	public function testReturnsCorrectUrl()
	{
		$expected = App::getBaseURL() . "/url";

		$this->assertEquals($expected, $this->html->url('url'));
	}

}