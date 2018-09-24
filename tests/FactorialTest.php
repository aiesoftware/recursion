<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\Factorial;
use PHPUnit\Framework\TestCase;

class FactorialTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testReturnsFactorialOfInput($input, $expected)
    {
        $sut = new Factorial();
        $this->assertEquals($expected, $sut->factorial($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => 5, 'expected' => 120],
            ['input' => 8, 'expected' => 40320]
        ];
    }
}
