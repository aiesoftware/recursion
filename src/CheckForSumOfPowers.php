<?php

namespace AIE\Recursion;

class CheckForSumOfPowers
{
    /**
     * Given a number, determine if each digit raised to the power of the length of the number,
     * when added together, is equal to the original number.
     *
     * Example:
     *
     * $number = 153
     * 1^3 + 5^3 + 3^3 = 153
     * So 153 returns true
     *
     * @param $number
     * @return bool
     */
    public function isSumOfPowersEqualToInput($number)
    {
        return $this->raiseToPowers($number, strlen((string)$number)) === $number;
    }

    /**
     * @param $number
     * @param $length
     * @return float|int|null
     */
    private function raiseToPowers($number, $length)
    {
        $number = (string) $number;

        if (strlen($number) == 0) {
            return null;
        }

        $finalIndex = strlen($number) - 1;
        $currentResult = pow($number[$finalIndex], $length);

        return $this->raiseToPowers(substr($number, 0, $finalIndex), $length) + $currentResult;
    }
}
