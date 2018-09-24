<?php

namespace AIE\Recursion;

class Factorial
{
    /**
     * Given a number, I want to multiply it by the value 1 below it, all the way down the value of 1.
     * Given 5, I want the result of 5x4x3x2x1
     * So I know that I want to reduce the number to 1, and I will do this by passing $num-1 each time to the call.
     * I also know that I want to multiply the result of the last iteration by the current $num.
     * And finally, if the current number is 1, that is what I want to multiply against, so I just return that.
     * The key thought here is "that I want to multiply the current number against the result of the previous"
     * But we know that all previous results will be the result of the previous, and so on.
     *
     * We start with what we know we will do:
     *      return $this->factorial($num - 1)
     *
     * If we assume, or believe, with all our will, that this will return the factorial of everything it has been given
     * so far, then we just have to multiply the result so far by the current $num that it has:
     *
     *      return $this->factorial($num - 1) * $num;
     *
     * And how do we know that the previous iterations will have done the job, so that we only have to worry about one cycle?
     * We write the function out of course!
     * We know that on each iteration we want to do "something"
     * AND
     * We know that when we do that "something" we want to establish a "result"
     * AND
     * When we have that "result" we want to do something with it against the "previous result"
     * In this instance, the ONLY thing we want to do is take the current input and multiply it against the previous result,
     * so actually we don't need any calculation other than to trust the nature of the recursion.
     *
     * @param $num
     * @return float|int
     */
    public function factorial($num)
    {
        if ($num === 1) {
            return $num;
        }

        return $this->factorial($num - 1) * $num;
    }
}
