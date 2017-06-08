<?php

namespace App\Ch10_3;

require_once(__DIR__ . "/legacy.php");

class Runner
{
    public static function init()
    {
        $facade = new ProductFacade(__DIR__ . '/test2.txt');
        $object = $facade->getProduct("234");
        print_r($object);
    }

}