<?php

namespace App\Ch11_1\Expressions\Operators;

use App\Ch11_1\Expressions\Expression;
use App\Ch11_1\InterpreterContext;

abstract class OperatorExpression extends Expression
{
    /**
     * @var \App\Ch11_1\Expressions\Expression
     */
    private $leftOp;

    /**
     * @var \App\Ch11_1\Expressions\Expression
     */
    private $rightOp;

    /**
     * OperatorExpression constructor.
     *
     * @param \App\Ch11_1\Expressions\Expression $leftOp
     * @param \App\Ch11_1\Expressions\Expression $rightOp
     */
    public function __construct(Expression $leftOp, Expression $rightOp)
    {
        $this->leftOp = $leftOp;
        $this->rightOp = $rightOp;
    }

    public function interpret(InterpreterContext $context)
    {
        $this->leftOp->interpret($context);
        $this->rightOp->interpret($context);
        $resultLeft = $context->lookup($this->leftOp);
        $resultRight = $context->lookup($this->rightOp);
        $this->doInterpret($context, $resultLeft, $resultRight);
    }

    abstract protected function doInterpret(InterpreterContext $context, $resultLeft, $resultRight);

}