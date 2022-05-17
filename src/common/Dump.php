<?php

namespace Dswl\Predump\common;

class Dump
{
    public static function p($obj = null)
    {
        echo "<pre>";
        var_dump($obj);
        echo "</pre>";
    }
    public static function pd($obj = null)
    {
        self::p($obj);
        exit;
    }
}
