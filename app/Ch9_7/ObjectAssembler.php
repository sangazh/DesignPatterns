<?php

namespace App\Ch9_7;

class ObjectAssembler
{
    /**
     * @var array
     */
    private static $components = [];

    /**
     * ObjectAssembler constructor.
     *
     * @param string $conf
     */
    public function __construct($conf)
    {
        self::configure($conf);
    }

    /**
     * @param string $conf
     */
    private static function configure($conf)
    {
        $data = simplexml_load_file($conf);
        foreach ($data->class as $class) {
            $args = [];
            $name = (string) $class['name'];
            foreach ($class->arg as $arg) {
                $argClass = (string) $arg['inst'];
                $args[(int) $arg['num']] = $argClass;
            }
            ksort($args);

            /* original, but not working
            static::$components[$name] = function () use ($name, $args) {
                $expandedArgs = [];
                foreach ($args as $arg) {
                    $expandedArgs[] = new $arg();
                }
                $rClass = new \ReflectionClass($name);
                return $rClass->newInstanceArgs($expandedArgs);
            };
            //*/

            $expandedArgs = [];
            foreach ($args as $arg) {
                $expandedArgs[] = new $arg();
            }
            $rClass = new \ReflectionClass($name);
            static::$components[$name] = $rClass->newInstanceArgs($expandedArgs);
        }
    }

    /**
     * @param string $class
     *
     * @return mixed
     * @throws \Exception
     */
    public function getComponent($class)
    {
        if (!isset(static::$components[$class])) {
            throw new \Exception("unknown component '$class'");
        }
        $ret = static::$components[$class];
        return $ret;
    }

}