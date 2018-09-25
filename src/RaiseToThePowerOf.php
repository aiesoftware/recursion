<?php

namespace AIE\Recursion;

class RaiseToThePowerOf
{
    /** @var int */
    private $iterationCount = 0;

    /**
     * @param $raise
     * @param $powerOf
     * @return float|int
     */
    public function raise($raise, $powerOf)
    {
        if (++$this->iterationCount == $powerOf) {
            return $raise;
        }

        return $this->raise($raise, $powerOf) * $raise;
    }
}
