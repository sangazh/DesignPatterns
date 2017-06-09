<?php

namespace App\Ch11_2\Marker;

use App\Ch11_2\MarkParse;

class MarkLogicMarker extends Marker
{
    private $engine;

    /**
     * MarkLogicMarker constructor.
     *
     * @param string $test
     */
    public function __construct($test)
    {
        parent::__construct($test);
        $this->engine = new MarkParse($test);
    }

    /**
     * @param string $response
     *
     * @return bool
     */
    public function mark($response)
    {
        return $this->engine->evaluate($response);
    }
}