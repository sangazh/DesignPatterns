<?php

namespace App\Ch11_3;

interface Observer
{
    public function update(Observable $observable);
}