<?php

namespace App\Ch11_4;

use App\Ch11_4\Unit\Unit;

/**
 * Class TextDumpArmyVisitor
 *
 * @package App\Ch11_4
 */
class TextDumpArmyVisitor extends ArmyVisitor
{
    private $text = "";

    /**
     * @param \App\Ch11_4\Unit\Unit $node
     */
    public function visit(Unit $node)
    {
        $txt = "";
        $pad = 4 * $node->getDepth();
        $txt .= sprintf("%{$pad}s%s: bombard: %s\n",
            "",
            get_class($node),
            $node->bombardStrength()
        );

        $this->text .= $txt;
    }

    public function getText()
    {
        return $this->text;
    }
}