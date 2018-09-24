<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\CheckForPalindrome;
use PHPUnit\Framework\TestCase;

class CheckForPalindromeTest extends TestCase
{
    /**
     * @dataProvider getInputs
     * @param $input
     * @param $expected
     */
    public function testChecksIfPalindrome($input, $expected)
    {
        $sut = new CheckForPalindrome();
        $this->assertEquals($expected, $sut->isPalindrome($input));
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        return [
            ['input' => 'dad', 'expected' => true],
            ['input' => 'Dad', 'expected' => true],
            ['input' => 'daddy', 'expected' => false]
        ];
    }
}
