<?php

namespace App\Ch10_2_2;

class Runner
{
    public static function init()
    {
        $process = new AuthenticateRequest(new StructureRequest(
            new LogRequest(
                new MainProcess()
            )
        ));
        $process->process(new RequestHelper());
    }

}