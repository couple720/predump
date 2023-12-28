<?php

namespace Dswl\Predump\common;

class Dump
{
    /**
     * 格式化打印
     */
    public static function p($obj = null)
    {
        echo "<pre>";
        var_dump($obj);
        echo "</pre>";
    }
    /**
     * 格式化打印并且停止
     */
    public static function pd($obj = null)
    {
        self::p($obj);
        exit;
    }
}
