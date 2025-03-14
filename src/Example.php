<?php

namespace Deg540\CleanCodeKata9;

use function PHPUnit\Framework\assertEquals;

class Example
{
    /**
     * @param $value
     *
     * @return bool
     */
    function integerChecker($value): bool {
        return is_integer($value);
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function fizzChecker($value): bool {
        return $value % 3 === 0;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    function buzzChecker($value): bool {
        return $value % 5 === 0;
    }
}