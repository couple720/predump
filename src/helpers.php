<?php

use Dswl\Predump\common\Dump;

if (!function_exists('p')) {
    function p($obj = null)
    {
        Dump::p($obj);
    }
}
if (!function_exists('pd')) {
    function pd($obj = null)
    {
        Dump::pd($obj);
    }
}
