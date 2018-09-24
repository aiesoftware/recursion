<?php

namespace AIE\Recursion;

class SumOfDigits
{
    /**
     * What do we want to do on each iteration?
     *      Get the current integer and return it.
     * How do we break from the loop?
     *      When the integer < 10 (i.e one digit)
     * When we have that "result" we want to do something with it against the "previous result"
     *      Add it to the previous result
     *
     * @param $digits
     * @return mixed
     */
    public function sumOfDigits($digits)
    {
        if ($digits < 10) {
            return $digits;
        }

        $digitsAsString = (string) $digits;
        $currentDigit = (int) substr($digitsAsString, 0, 1);
        $remainingDigitsAsString = substr($digitsAsString, 1, strlen($digitsAsString));

        return $this->sumOfDigits((int) $remainingDigitsAsString) + $currentDigit;
    }
}
