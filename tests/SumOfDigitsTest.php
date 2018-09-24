<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\SumOfDigits;
use PHPUnit\Framework\TestCase;

class SumOfDigitsTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testSumsGivenDigits($input, $expected)
    {
        $sut = new SumOfDigits();
        $this->assertEquals($expected, $sut->sumOfDigits($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => 234, 'expected' => 9],
            ['input' => 12, 'expected' => 3],
            ['input' => 39, 'expected' => 12]
        ];
    }
}
