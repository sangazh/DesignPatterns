<?php

namespace App\Ch11_6;

use App\Ch11_4\Unit\Unit;

/**
 * Class NullUnit
 *
 * @package App\Ch11_6
 */
class NullUnit extends Unit
{
    /**
     * @return bool
     */
    public function isNull()
    {
        return true;
    }

    /**
     * @return int
     */
    public function bombardStrength()
    {
        return 0;
    }

    /**
     * @return int
     */
    public function getHealth()
    {
        return 0;
    }

    /**
     * @return int
     */
    public function getDepth()
    {
        return 0;
    }
}