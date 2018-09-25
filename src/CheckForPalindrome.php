<?php

namespace AIE\Recursion;

class CheckForPalindrome
{
    /**
     * @param $string
     * @return bool
     */
    public function isPalindrome($string)
    {
        $reversed = $this->reverse($string);

        return strtolower($reversed) === strtolower($string);
    }

    /**
     * @param $string
     * @return string
     */
    private function reverse($string)
    {
        if (strlen($string) == 1) {
            return $string;
        }

        return $this->reverse(substr($string, 1, strlen($string))) . $string[0];
    }
}
