<?php

namespace App\Ch11_2;

class MarkParse
{
    /**
     * @var string
     */
    private $test;

    /**
     * MarkParse constructor.
     *
     * @param string $test
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    public function evaluate($response)
    {
        return true;
    }
}