<?php

namespace App\Ch11_2\Marker;

class MatchMarker extends Marker
{

    /**
     * @param string $response
     *
     * @return bool
     */
    public function mark($response)
    {
        return ($this->test == $response);
    }
}