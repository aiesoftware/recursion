<?php

namespace AIE\Recursion;

class PrintAllArrayElements
{
    /**
     * What do we want to do on each iteration?
     *      Get the current element and return it.
     * How do we break from the loop?
     *      When the array is empty
     * When we have that "result" we want to do something with it against the "previous result"
     *      Append it to the previous result
     *
     * @param array $input
     * @return string
     */
    public function printAllElements(array $input)
    {
        $count = count($input);
        if ($count == 1) {
            return $input[0];
        }

        $currentElement = $input[$count - 1];

        return $this->printAllElements(array_slice($input, 0, -1)) . $currentElement;
    }
}
