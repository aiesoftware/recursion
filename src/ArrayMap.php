<?php

namespace AIE\Recursion;

/**
 * Class ArrayMap
 *
 * A recursive homemade version of PHPs array_map function.
 *
 * @package AIE\Recursion
 */
class ArrayMap
{
    /**
     * @param array $input
     * @param callable $callback
     * @return array|mixed|null
     */
    public function arrayMap(array $input, callable $callback)
    {
        if (empty($input)) {
            return [null];
        }

        $result = [$callback(array_pop($input))];

        return array_filter(array_merge($this->arrayMap($input, $callback), $result));
    }
}
