<?php

namespace App\Ch11_1\Expressions\Operators;

use App\Ch11_1\InterpreterContext;

class BooleanAndExpression extends OperatorExpression
{

    protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight)
    {
        $context->replace($this, $resultLeft && $resultRight);
    }
}