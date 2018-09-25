<?php

namespace AIE\Recursion;

class RepeatString
{
    /**
     * The first thing I know is that I want to perform the same action (repeat a char and uppercase)
     * for every character in the string.
     *
     * I know that I want to reduce the string down on each iteration, to eventually give me a break clause
     * of a string with one char.
     *
     * I know that I want to take the result of each iteration, and concat it to the previous result with a '-'.
     *
     * So I begin to think about the return value of each call, which we know will contain the recursive call.
     * And I know that each call will need a reduced input compared to the current one. Specifically, I want it to
     * be the same string as current but with the last char removed. So I know I want this:
     *
     *      return $this->repeat(substr($string, 0, strlen($string) - 1))
     *
     * But now I need to start thinking about what I want to do with the result of the current iteration.
     * This forms the basis of the functionality within the recursive function.
     * One thing I have already established is that however we establish the return value of the current iteration,
     * I want to append it to the result of the previous call. So I know I want this:
     *
     *      return $this->repeat(substr($string, 0, strlen($string) - 1)) . '-' . $currentReturn;
     *
     * Important: with recursion, we need to reverse the order that we expect it to be returned.
     * Remember that nothing gets returned until the recursion has reached the final execution.
     * The return result is the result of a function, which is the result of a function, which is the result of a function..
     * It will go all the way down the stack until it finally reaches the break condition and returns a literal value
     * When this happens, we have now returned 'A'. It then goes back up the chain, recalling the result of each iteration:
     * 1: determines 'A'
     * 2: determines 'Bb'
     * 3: determines 'Ccc'
     * 4: determines 'Dddd'
     * Each determined value is being used in our return statement to concat on to the previously determined value.
     * The result of each call becomes:
     * 1: 'A'
     * 2: 'A-Bb'
     * 3: 'A-Bb-Ccc'
     * 4: 'A-Bb-Ccc-Dddd'
     * And therefore in the concatenation of
     *      recursiveCall(...) . '-' . $currentReturn;
     * The recursiveCall(...) result is result of the string so far.
     *
     * @param $string
     * @return mixed
     */
    public function repeat($string)
    {
        $length = strlen($string);
        if ($length == 1) {
            return ucfirst($string);
        }

        $currentReturn = ucfirst(str_repeat($string[$length-1], $length));

        return $this->repeat(substr($string, 0, strlen($string) - 1)) . '-' . $currentReturn;
    }
}
