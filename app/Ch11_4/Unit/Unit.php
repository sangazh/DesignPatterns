<?php

namespace App\Ch11_4\Unit;

use App\Ch11_4\ArmyVisitor;

/**
 * Class Unit
 *
 * @package App\Ch11_4\Unit
 */
abstract class Unit
{
    protected $depth;

    public function getComposite()
    {
        return null;
    }

    /**
     * @return int
     */
    abstract public function bombardStrength();

    /**
     * @param \App\Ch11_4\ArmyVisitor $visitor
     */
    public function accept(ArmyVisitor $visitor)
    {
        $refThis = new \ReflectionClass(get_class($this));
        $method = "visit".$refThis->getShortName();
        $visitor->$method($this);
    }

    /**
     * @param $depth
     */
    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }

}

