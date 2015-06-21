<?php namespace Gazzete\Helpers;

use Gazzete\Kernel\App;

/**
 * @author  Rizart Dokollari
 * @version 6/16/2015
 */
class Html
{

    public function link($url, $rel = 'stylesheet', $type = 'text/css')
    {
        return "<link href='" . App::getBaseURL() . "/$url' rel='$rel' type='$type' />";
    }

    public function script($src)
    {
        return "<script src='" . App::getBaseURL() . "/$src'></script>";
    }

    public function documentWriteScript($src)
    {
        return "document.write(\"<script src='" . App::getBaseURL() . "/$src'><\\/script>\")";
    }

    public function url($url)
    {
        return App::getBaseURL() . "/$url";
    }

    public function anchor($href, $text, $id = NULL, $class = NULL)
    {
        return "<a href='$href' class='$class' id='$id' >$text</a>";
    }
}