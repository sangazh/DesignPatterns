<?php

namespace App\Ch8\Cost;

use App\Ch8\Lesson;

class FixedCostStrategy extends CostStrategy
{

    public function cost(Lesson $lesson)
    {
        return 30;
    }

    public function chargeType()
    {
        return "fixed rate";
    }
}