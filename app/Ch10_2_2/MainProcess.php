<?php

namespace App\Ch10_2_2;

class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $request)
    {
        print __CLASS__ . ": doing something useful with request\n";
    }
}