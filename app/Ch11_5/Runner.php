<?php

namespace App\Ch11_5;

class Runner
{
    public static function init()
    {
        $controller = new Controller();
        $context = $controller->getContext();

        $context->addParam('action', 'login');
        $context->addParam('username', 'bob');
        $context->addParam('pass', 'tiddles');
        $controller->process();

        print $context->getError();

    }

}