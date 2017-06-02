<?php

namespace App\Ch8\Cost;
use App\Ch8\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson);
    abstract public function chargeType();

}