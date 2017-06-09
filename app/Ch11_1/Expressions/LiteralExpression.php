<?php

namespace App\Ch11_1\Expressions;

use App\Ch11_1\InterpreterContext;

class LiteralExpression extends Expression
{
    /**
     * @var
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}