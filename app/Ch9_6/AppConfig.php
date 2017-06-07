<?php

namespace App\Ch9_6;

use App\Ch9_4\Bloggs\BloggsCommsManager;
use App\Ch9_4\Mega\MegaCommsManager;
use App\Ch9_4\CommsManager;

class AppConfig
{
    private static $instance;
    private        $commsManager;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        switch (Setting::$COMMSTYPE) {
            case "Mega":
                $this->commsManager = new MegaCommsManager();
                break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return CommsManager
     */
    public function getCommsManager()
    {
        return $this->commsManager;
    }

}