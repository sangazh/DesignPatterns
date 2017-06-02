<?php

namespace App\Ch9_1;


abstract class Employee
{
    private static $types = ['Minion', 'CluedUp', 'WellConnected'];
    protected      $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function recruit($name)
    {
        $num = rand(1, count(self::$types)) - 1;
        $class = __NAMESPACE__ . "\\" . self::$types[$num];
        return new $class($name);
    }

    abstract public function fire();
}