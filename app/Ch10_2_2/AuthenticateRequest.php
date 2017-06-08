<?php

namespace App\Ch10_2_2;

class AuthenticateRequest extends DecorateProcess
{

    public function process(RequestHelper $request)
    {
        print __CLASS__ . ": authenticating request\n";
        $this->processRequest->process($request);
    }
}