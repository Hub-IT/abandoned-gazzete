<?php namespace app\Helpers;

use Faker\Factory;
use Gazzete\Helpers\Html;
use Gazzete\Kernel\App;

class HtmlTest extends \PHPUnit_Framework_TestCase
{

    private $html;

    private $faker;

    protected function setUp()
    {
        $this->html = new Html();

        $this->faker = Factory::create();
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

    public function testReturnsCorrectWithARelativeAnchor()
    {
        $href = App::getBaseURL() . "/url";
        $text = $this->faker->paragraph;
        $class = $this->faker->optional(0.5, null)->word();
        $id = $this->faker->optional(0.5, null)->word();

        $expected = "<a href='$href' class='$class' id='$id' >$text</a>";

        $this->assertEquals($expected, $this->html->anchor($href, $text, $id, $class));
    }

}