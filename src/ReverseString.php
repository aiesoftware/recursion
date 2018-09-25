<?php

namespace AIE\Recursion;

class ReverseString
{
    /**
     * We want to reverse a given string.
     * This means we want to create a new string, gradually, based on the original string.
     *
     * We know that on each iteration we want to do "something":
     *      This is a funny one, because in a traditional loop we would take the last char of the string and put it
     *      as the next char in our new string.
     *
     *      But remember that in recursion, it goes to the bottom of the call chain before anything is returned:
     *      alex returns a
     *      lex returns l
     *      ex returns e
     *      x returns x
     *      x is at the bottom of the call stack, so x is the first value to surface from the call
     *      x now has the previous appended: xe
     *      xe now has the previous appended: xel
     *      xel now has the previous appended: xela
     *
     *      So now that we have remembered this, we want a way to make 'x' the "first" result, then 'e', etc
     *      We do this by chipping away at the string from the FRONT, until we get to the final 'x'
     *
     * @param $string
     * @return string
     */
    public function reverse($string)
    {
        if (strlen($string) < 2) {
            return $string;
        }

        return $this->reverse(substr($string, 1, strlen($string))) . $string[0];
    }
}
