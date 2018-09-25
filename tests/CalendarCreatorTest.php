<?php

namespace AIE\Recursion\Test;

use AIE\Recursion\CalendarCreator;
use PHPUnit\Framework\TestCase;

class CalendarCreatorTest extends TestCase
{
    public function testCreatesCalendar()
    {
        $sut = new CalendarCreator();

        $this->assertEquals($this->getExpected(), $sut->create(['jan', 'feb'], [1,2,3,4,5,6,7,8,9,10,11]));
    }

    /**
     * @return array
     */
    public function getExpected()
    {
        return [
            'jan' => [1,2,3,4,5,6,7,8,9,10,11],
            'feb' => [1,2,3,4,5,6,7,8,9,10,11],
        ];
    }
}
