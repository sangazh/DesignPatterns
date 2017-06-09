<?php

namespace App\Ch11_2\Marker;

class RegexMarker extends Marker
{

    /**
     * @param string $response
     *
     * @return bool
     */
    public function mark($response)
    {
        return (preg_match("$this->test", $response) === 1);
    }
}