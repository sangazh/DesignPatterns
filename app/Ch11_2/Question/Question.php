<?php

namespace App\Ch11_2\Question;

use App\Ch11_2\Marker\Marker;

abstract class Question
{
    protected $prompt;
    /**
     * @var \App\Ch11_2\Marker\Marker
     */
    protected $marker;

    /**
     * Question constructor.
     *
     * @param  string                   $prompt
     * @param \App\Ch11_2\Marker\Marker $marker
     */
    public function __construct($prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    /**
     * @param string $response
     *
     * @return bool
     */
    public function mark($response)
    {
        return $this->marker->mark($response);
    }
}