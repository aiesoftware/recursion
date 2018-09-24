<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\PrintAllArrayElements;
use PHPUnit\Framework\TestCase;

class PrintAllArrayElementsTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testPrintsAllArrayElements($input, $expected)
    {
        $sut = new PrintAllArrayElements();
        $this->assertEquals($expected, $sut->printAllElements($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => ['a','b','c','d','e'], 'expected' => 'abcde']
        ];
    }
}
