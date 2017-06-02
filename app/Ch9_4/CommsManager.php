<?php

namespace App\Ch9_4;

abstract class CommsManager
{
    abstract public function getHeaderText();
    abstract public function getApptEncoder();
    abstract public function getTtdEncoder();
    abstract public function getContactEncoder();
    abstract public function getFooterText();
}