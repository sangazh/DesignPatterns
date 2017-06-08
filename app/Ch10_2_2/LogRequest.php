<?php

namespace App\Ch10_2_2;

class LogRequest extends DecorateProcess
{

    public function process(RequestHelper $request)
    {
        print __CLASS__ . ": logging request\n";
        $this->processRequest->process($request);
    }
}