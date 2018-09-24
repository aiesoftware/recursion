<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\RepeatString;
use PHPUnit\Framework\TestCase;

class RepeatStringTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testReturnsARepeatedStringOfGivenString($input, $expected)
    {
        $sut = new RepeatString();
        $this->assertEquals($expected, $sut->repeat($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => 'abcde', 'expected' => 'A-Bb-Ccc-Dddd-Eeeee'],
            ['input' => 'feaqtf', 'expected' => 'F-Ee-Aaa-Qqqq-Ttttt-Ffffff']
        ];
    }
}
