<?php

namespace AIE\Recursion;

class CalendarCreator
{
    /**
     * @param array $months
     * @param array $days
     * @return array
     */
    public function create(array $months, array $days)
    {
        if (empty($months)) {
            return [];
        }

        $monthCalendar[$months[count($months)-1]] = $days;
        array_pop($months);

        return array_merge($this->create($months, $days), $monthCalendar);

        /**
         * Iterative version.
         *
         * $monthSize = count($months);
         * $daySize = count($days);
         * $result = [];
         *
         * for ($i = 0; $i < $monthSize; $i++) {
         *   for ($j = 0; $j < $daySize; $j++) {
         *     $result[$months[$i]][] = $days[$j];
         *   }
         * }
         *
         * return $result;
         *
         */
    }
}
