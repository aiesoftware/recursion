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
     * We know that when we do that "something" we want to establish a "result":
     * When we have that "result" we want to do something with it against the "previous result"
     *
     * @param $string
     * @return string
     */
    public function reverse($string)
    {
        // Assume every iteration will be handled for us
        // So on the very last call, what would we want?
        // We want to put the first element on the end of the rest
        // it is the first, because on each iteration the first item will be different,
        // because on each iteration we are passing in the string with the previous first character being removed
        // i.e we are shortening the string
        // So on every iteration, what do we want to do, or what do we want to extract, from our input
        // in the case of reversing, we just want to get the first character in the string, before it is plucked off
        // so in that case, we return the recursive function call PLUS the thing we care about, in this case, the 1st char

        if (strlen($string) < 2) {
            return $string;
        }

        return $this->reverse(substr($string, 1, strlen($string))) . $string[0];
    }
}
