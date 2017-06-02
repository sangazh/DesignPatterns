<?php

namespace App\Ch9_5;

use App\Ch9_5\Forest\EarthForest;
use App\Ch9_5\Plains\EarthPlains;
use App\Ch9_5\Plains\MarsPlains;
use App\Ch9_5\Sea\EarthSea;

class Runner
{
    public static function init()
    {
        $factory1 = new TerrainFactory(
            new EarthSea(-1),
            new EarthPlains(),
            new EarthForest()
        );

        print_r($factory1->getSea());
        print_r($factory1->getPlains());
        print_r($factory1->getForest());

        $factory2 = new TerrainFactory(
            new EarthSea(3),
            new MarsPlains(),
            new EarthForest()
        );

        print_r($factory2->getSea());
        print_r($factory2->getPlains());
        print_r($factory2->getForest());
    }

}