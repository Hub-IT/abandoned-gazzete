<?php
namespace app\Helpers;

use Gazzete\Kernel\App;

class AppTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testReturnsCorrectUrl()
    {
        $expected = App::getBaseURL() . "/url";

        $this->assertEquals($expected, App::url('url'));
    }

}