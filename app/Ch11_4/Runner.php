<?php

namespace App\Ch11_4;

use App\Ch11_4\Unit\Archer;
use App\Ch11_4\Unit\Cavalry;
use App\Ch11_4\Unit\Composite\Army;
use App\Ch11_4\Unit\LaserCannonUnit;

class Runner
{
    public static function init()
    {
        $mainArmy = new Army();
        $mainArmy->addUnit(new Archer());
        $mainArmy->addUnit(new LaserCannonUnit());
        $mainArmy->addUnit(new Cavalry());

        $textDump = new TextDumpArmyVisitor();
        $mainArmy->accept($textDump);
        print $textDump->getText();

        $taxCollector = new TaxCollectionVisitor();
        $mainArmy->accept($taxCollector);
        print $taxCollector->getReport();
        print "TOTAL: ";
        print $taxCollector->getTax() . "\n";
    }

}