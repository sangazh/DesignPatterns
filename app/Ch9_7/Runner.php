<?php

namespace App\Ch9_7;

class Runner
{
    public static function init()
    {
        $assembler = new ObjectAssembler(__DIR__ . "/objects.xml");
        $apptMaker = $assembler->getComponent("\\App\\Ch9_7\\AppointmentMaker2");
        $out = $apptMaker->makeAppointment();
        print $out;
    }

    /**
     * working
     * @return object
     */
    public static function test()
    {
        $name = "\\App\\Ch9_7\\AppointmentMaker2";
        $arg = "App\\Ch9_3\\BloggsApptEncoder";
        $rClass = new \ReflectionClass($name);
        $expandedArgs[] = new $arg();
        return $rClass->newInstanceArgs($expandedArgs);
    }

    /**
     * not working
     * @return \Closure
     */
    public static function test2()
    {
        $name = "\\App\\Ch9_7\\AppointmentMaker2";
        $args = ["App\\Ch9_3\\BloggsApptEncoder"];
        return function () use ($name, $args){
            $expandedArgs = [];
            foreach ($args as $arg) {
                $expandedArgs[] = new $arg();
            }
            $rClass = new \ReflectionClass($name);
            return $rClass->newInstanceArgs($expandedArgs);
        };

    }

}