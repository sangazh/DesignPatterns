<?php

namespace App\Ch8;
use App\Ch8\Cost\CostStrategy;

abstract class Lesson
{

    private $duration;

    /**
     * @var CostStrategy
     */
    private $costStrategy;

    /**
     * Lesson constructor.
     *
     * @param                   $duration
     * @param CostStrategy $strategy
     */
    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    /**
     * @return mixed
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return mixed
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }
}