<?php

namespace AIE\Recursion;

class RaiseToThePowerOf
{
    private $iterationCount = 0;

    /**
     * Each iteration wants to take the result of the previous iteration and * $powerOf.
     * How do break out?
     *
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
