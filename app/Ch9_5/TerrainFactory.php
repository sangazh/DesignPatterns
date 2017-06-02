<?php

namespace App\Ch9_5;

use App\Ch9_5\Forest\Forest;
use App\Ch9_5\Plains\Plains;
use App\Ch9_5\Sea\Sea;

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    /**
     * @return \App\Ch9_5\Sea\Sea
     */
    public function getSea()
    {
        return clone $this->sea;
    }

    /**
     * @return \App\Ch9_5\Forest\Forest
     */
    public function getForest()
    {
        return clone $this->forest;
    }

    /**
     * @return \App\Ch9_5\Plains\Plains
     */
    public function getPlains()
    {
        return clone $this->plains;
    }



}