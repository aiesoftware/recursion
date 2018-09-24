<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\RaiseToThePowerOf;
use PHPUnit\Framework\TestCase;

class RaiseToThePowerOfTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $raise
     * @param $powerOf
     * @param $expected
     */
    public function testRaisesToThePowerOfInput($raise, $powerOf, $expected)
    {
        $sut = new RaiseToThePowerOf();
        $this->assertEquals($expected, $sut->raise($raise, $powerOf));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['raise' => 1, 'powerOf' => 3, 'expected' => 1],
            ['raise' => 2, 'powerOf' => 4, 'expected' => 16],
            ['raise' => 5, 'powerOf' => 3, 'expected' => 125]
        ];
    }
}
