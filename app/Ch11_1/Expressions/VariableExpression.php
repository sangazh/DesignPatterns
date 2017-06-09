<?php

namespace App\Ch11_1\Expressions;

use App\Ch11_1\InterpreterContext;

class VariableExpression extends Expression
{
    /**
     * @var
     */
    private $name;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->name;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * VariableExpression constructor.
     *
     * @param      $name
     * @param null $val
     */
    public function __construct($name, $val = null)
    {
        $this->name = $name;
        $this->value = $val;
    }

    /**
     * @param \App\Ch11_1\InterpreterContext $context
     */
    public function interpret(InterpreterContext $context)
    {
        if (!is_null($this->value)) {
            $context->replace($this, $this->value);
            $this->value = null;
        }
    }
}