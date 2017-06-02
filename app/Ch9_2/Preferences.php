<?php

namespace App\Ch9_2;

/**
 * 单例模式示例
 *
 * @package App\Ch9_2
 */
class Preferences
{
    private $props = array();
    private static $instance;

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    /**
     * @param string $key
     * @param string $val
     */
    public function setProperty($key, $val)
    {
        $this->props[$key] = $val;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getProperty($key)
    {
        return $this->props[$key];
    }

}