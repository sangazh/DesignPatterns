<?php

namespace App\Ch9_3;

abstract class CommsManager
{
    abstract public function getHeaderText();
    abstract public function getApptEncoder();
    abstract public function getFooterText();

}