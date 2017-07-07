<?php

namespace App\Ch11_4;

use App\Ch11_4\Unit\Archer;
use App\Ch11_4\Unit\Cavalry;
use App\Ch11_4\Unit\Composite\Army;
use App\Ch11_4\Unit\Composite\TroopCarrierUnit;
use App\Ch11_4\Unit\LaserCannonUnit;
use App\Ch11_4\Unit\Unit;

/**
 * Class ArmyVisitor
 *
 * @package App\Ch11_4
 */
abstract class ArmyVisitor
{
    /**
     * @param \App\Ch11_4\Unit\Unit $node
     *
     * @return mixed
     */
    abstract public function visit(Unit $node);

    /**
     * @param \App\Ch11_4\Unit\Archer $node
     */
    public function visitArcher(Archer $node)
    {
        $this->visit($node);
    }

    /**
     * @param \App\Ch11_4\Unit\Cavalry $node
     */
    public function visitCavalry(Cavalry $node)
    {
        $this->visit($node);
    }

    /**
     * @param \App\Ch11_4\Unit\LaserCannonUnit $node
     */
    public function visitLaserCannonUnit(LaserCannonUnit $node)
    {
        $this->visit($node);
    }

    /**
     * @param \App\Ch11_4\Unit\Composite\TroopCarrierUnit $node
     */
    public function visitTroopCarrierUnit(TroopCarrierUnit $node)
    {
        $this->visit($node);
    }

    /**
     * @param \App\Ch11_4\Unit\Composite\Army $node
     */
    public function visitArmy(Army $node)
    {
        $this->visit($node);
    }
}