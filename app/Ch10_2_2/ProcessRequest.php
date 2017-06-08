<?php

namespace App\Ch10_2_2;

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $request);
}