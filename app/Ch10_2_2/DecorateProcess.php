<?php

namespace App\Ch10_2_2;

abstract class DecorateProcess extends ProcessRequest
{
    protected $processRequest;

    public function __construct(ProcessRequest $pr)
    {
        $this->processRequest = $pr;
    }

}