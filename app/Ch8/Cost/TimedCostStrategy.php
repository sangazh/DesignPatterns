<?php

namespace App\Ch8\Cost;

use App\Ch8\Lesson;

class TimedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration() * 5;
    }

    public function chargeType()
    {
        return "hourly rate";
    }
}