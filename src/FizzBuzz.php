<?php

namespace Deg540\CleanCodeKata9;

use function PHPUnit\Framework\assertEquals;

class FizzBuzz
{
    const FIZZ_NUMBER = 3;
    const BUZZ_NUMBER = 5;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @param int $number
     *
     * @return bool
     */
    public function fizzDivisibleChecker(int $number): bool {
        return $number % self::FIZZ_NUMBER === 0;
    }

    /**
     * @param int $number
     *
     * @return bool
     */
    public function buzzDivisibleChecker(int $number): bool {
        return $number % self::BUZZ_NUMBER === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    public function fizzBuzzDivisibleChecker(int $number): bool {
        return $number % self::BUZZ_NUMBER === 0 && $number % self::FIZZ_NUMBER === 0;
    }

    /**
     * @param int $number
     * @return int|string
     */
    public function convert(int $number): int|string {
        if($this->fizzBuzzDivisibleChecker($number)) {
            return 'FizzBuzz';
        }

        if($this->fizzDivisibleChecker($number)) {
            return 'Fizz';
        }

        if($this->buzzDivisibleChecker($number)) {
            return 'Buzz';
        }

        return $number;
    }

    /**
     * @param int $number
     * @return bool
     */
    public function fizzContainsChecker(int $number): bool{
        return str_contains($number, self::FIZZ_NUMBER);

    }

    /**
     * @param int $number
     * @return bool
     */
    public function buzzContainsChecker(int $number): bool{
        return str_contains($number, self::BUZZ_NUMBER);

    }
}