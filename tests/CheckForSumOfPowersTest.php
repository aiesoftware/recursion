<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\CheckForSumOfPowers;
use PHPUnit\Framework\TestCase;

class CheckForSumOfPowersTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testVerifiesIfSumOfPowersEqualToInput($input, $expected)
    {
        $sut = new CheckForSumOfPowers();
        $this->assertEquals($expected, $sut->isSumOfPowersEqualToInput($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => 153, 'expected' => true],
            ['input' => 9474, 'expected' => true],
            ['input' => 234229983, 'expected' => false],
            ['input' => 11513221922401, 'expected' => false]
        ];
    }
}
