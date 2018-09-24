<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\ReverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testReversesGivenStrings($input, $expected)
    {
        $sut = new ReverseString();
        $this->assertEquals($expected, $sut->reverse($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => 'Hello', 'expected' => 'olleH'],
            ['input' => 'abcDEF!', 'expected' => '!FEDcba']
        ];
    }
}
