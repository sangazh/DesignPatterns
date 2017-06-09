<?php

namespace App\Ch11_1;

use App\Ch11_1\Expressions\Expression;

class InterpreterContext
{

    private $expressionStore;

    public function replace(Expression $exp, $value)
    {
        $this->expressionStore[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressionStore[$exp->getKey()];
    }
}