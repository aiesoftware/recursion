<?php

namespace AIE\Recursion;

class CheckForPalindrome
{
    /**
     * Given a string of 'dad', I want to reverse it, and then see if the reverse === original.
     *
     * @param $string
     * @return bool
     */
    public function isPalindrome($string)
    {
        $reversed = $this->reverse($string);

        return strtolower($reversed) === strtolower($string);
    }

    /**
     * Build a new string by plucking each character and appending to new string
     *
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
