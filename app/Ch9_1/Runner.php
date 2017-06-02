<?php

namespace App\Ch9_1;

/**
 * Class Runner
 *
 * @package App\Ch9_1
 * @author  zhangshan
 */
class Runner
{
    public static function init()
    {
        $boss = new NastyBoss();
        $boss->addEmployee(Employee::recruit("Harry"));
        $boss->addEmployee(Employee::recruit("Bob"));
        $boss->addEmployee(Employee::recruit("Mary"));
        $boss->projectFails();
        $boss->projectFails();
        $boss->projectFails();

    }

}