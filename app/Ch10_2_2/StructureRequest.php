<?php

namespace App\Ch10_2_2;

class StructureRequest extends DecorateProcess
{

    public function process(RequestHelper $request)
    {
        print __CLASS__ . ": structuring request\n";
        $this->processRequest->process($request);
    }
}