<?php

namespace App\Ch11_1\Expressions;

use App\Ch11_1\InterpreterContext;

abstract class Expression
{
    private static $keyCount = 0;
    private $key;

    abstract public function interpret(InterpreterContext $context);

    /**
     * @return mixed
     */
    public function getKey()
    {
        if (!isset($this->key)) {
            self::$keyCount++;
            $this->key = self::$keyCount;
        }
        return $this->key;
    }


}