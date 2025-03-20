<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void{
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function isNotFizzDivisibleBy3(): void {
        $divisibleChecker = $this->fizzBuzz->fizzDivisibleChecker(1);

        $this->assertFalse($divisibleChecker);
    }

    /**
     * @test
     */
    public function isFizzDivisibleBy3(): void{
        $divisibleChecker = $this->fizzBuzz->fizzDivisibleChecker(3);

        $this->assertTrue($divisibleChecker);
    }

    /**
     * @test
     */
    public function isNotBuzzDivisibleBy5(): void{
        $divisibleChecker = $this->fizzBuzz->buzzDivisibleChecker(1);

        $this->assertFalse($divisibleChecker);
    }

    /**
     * @test
     */
    public function isBuzzDivisibleBy5(): void{
        $divisibleChecker = $this->fizzBuzz->buzzDivisibleChecker(5);

        $this->assertTrue($divisibleChecker);
    }

    /**
     * @test
     */
    public function isNotFizzBuzzDivisibleBy3And5(): void{
        $divisibleChecker = $this->fizzBuzz->fizzBuzzDivisibleChecker(10);

        $this->assertFalse($divisibleChecker);
    }

    /**
     * @test
     */
    public function isFizzBuzzDivisibleBy3And5(): void{
        $divisibleChecker = $this->fizzBuzz->fizzBuzzDivisibleChecker(15);

        $this->assertTrue($divisibleChecker);
    }

    /**
     * @test
     */
    public function isFizzReturnsFizz(): void{
        $convertChecker = $this->fizzBuzz->convert(3);

        $this->assertEquals('Fizz',$convertChecker);

    }

    /**
     * @test
     */
    public function isBuzzReturnsBuzz(): void{
        $convertChecker = $this->fizzBuzz->convert(5);

        $this->assertEquals('Buzz',$convertChecker);
    }

    /**
     * @test
     */
    public function isFizzBuzzReturnsFizzBuzz(): void{
        $convertChecker = $this->fizzBuzz->convert(15);

        $this->assertEquals('FizzBuzz',$convertChecker);
    }

    /**
     * @test
     */
    public function isNotFizzContains3(): void{
        $containsChecker = $this->fizzBuzz->fizzContainsChecker(12);

        $this->assertFalse($containsChecker);
    }

    /**
     * @test
     */
    public function isFizzContains3(): void{
        $containsChecker = $this->fizzBuzz->fizzContainsChecker(13);

        $this->assertTrue($containsChecker);
    }

    /**
     * @test
     */
    public function isNotBuzzContains5(): void{
        $containsChecker = $this->fizzBuzz->buzzContainsChecker(12);

        $this->assertFalse($containsChecker);
    }

    /**
     * @test
     */
    public function isBuzzContains5(): void{
        $containsChecker = $this->fizzBuzz->buzzContainsChecker(15);

        $this->assertTrue($containsChecker);
    }
}
