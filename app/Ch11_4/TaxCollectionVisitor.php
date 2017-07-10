<?php

namespace App\Ch11_4;

use App\Ch11_4\Unit\Archer;
use App\Ch11_4\Unit\Cavalry;
use App\Ch11_4\Unit\Composite\TroopCarrierUnit;
use App\Ch11_4\Unit\Unit;

/**
 * Class TaxCollectionVisitor
 *
 * @package App\Ch11_4
 */
class TaxCollectionVisitor extends ArmyVisitor
{
    private $due    = 0;
    private $report = "";

    /**
     * @param \App\Ch11_4\Unit\Unit $node
     *
     * @return void
     */
    public function visit(Unit $node)
    {
        $this->levy($node, 1);
    }

    /**
     * @param \App\Ch11_4\Unit\Archer $node
     */
    public function visitArcher(Archer $node)
    {
        $this->levy($node, 2);
    }

    /**
     * @param \App\Ch11_4\Unit\Cavalry $node
     */
    public function visitCavalry(Cavalry $node)
    {
        $this->levy($node, 3);
    }

    /**
     * @param \App\Ch11_4\Unit\Composite\TroopCarrierUnit $node
     */
    public function  visitTroopCarrierUnit(TroopCarrierUnit $node)
    {
        $this->levy($node, 5);
    }

    /**
     * @param \App\Ch11_4\Unit\Unit $unit
     * @param   int                 $amount
     */
    private function levy(Unit $unit, $amount)
    {
        $this->report .= sprintf("Tax levied for %s : %s\n", get_class($unit), $amount);
        $this->due += $amount;
    }

    /**
     * @return string
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @return int
     */
    public function getTax()
    {
        return $this->due;
    }
}