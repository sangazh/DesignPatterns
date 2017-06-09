<?php

namespace App\Ch11_1;

use App\Ch11_1\Operator\BooleanOrExpression;
use App\Ch11_1\Operator\EqualsExpression;

class Runner
{
    public static function init()
    {
        $context = new InterpreterContext();
        $input = new VariableExpression('input');
        $statement = new BooleanOrExpression(
            new EqualsExpression($input, new LiteralExpression("four")),
            new EqualsExpression($input, new LiteralExpression('4'))
        );

        foreach (["four", "4", "52"] as $value) {
            $input->setValue($value);
            print  "$value:\n";
            $statement->interpret($context);
            if ($context->lookup($statement)) {
                print "top marks\n\n";
            } else {
                print "dunce hat on \n\n";
            }
        }
    }

    public static function init2()
    {
        $context = new InterpreterContext();
        $myVar = new VariableExpression('input', 'four');
        $myVar->interpret($context);
        print $context->lookup($myVar) . "\n";

        $newVar = new VariableExpression('input');
        $newVar->interpret($context);
        print $context->lookup($newVar) . "\n";

        $myVar->setValue("five");
        $myVar->interpret($context);
        print $context->lookup($myVar) . "\n";
        print $context->lookup($newVar) . "\n";
    }

    public static function init1()
    {
        $context = new InterpreterContext();
        $literal = new LiteralExpression('four');
        $literal->interpret($context);
        print $context->lookup($literal) . "\n";
    }

}