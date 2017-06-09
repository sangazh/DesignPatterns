<?php

namespace App\Ch11_2;

abstract class Marker
{
    private $test;

    /**
     * Marker constructor.
     *
     * @param string $test
     */
    public function __construct($test)
    {
        $this->test = $test;
    }

    /**
     * @param string $response
     *
     * @return bool
     */
    abstract public function mark($response);

}
