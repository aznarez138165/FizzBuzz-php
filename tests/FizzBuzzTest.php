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
    public function givenNumberNotDivisibleBy3ReturnsFizzFalse(): void {
        $divisibleChecker = $this->fizzBuzz->fizzDivisibleChecker(1);

        $this->assertFalse($divisibleChecker);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy3ReturnsFizzTrue(): void{
        $divisibleChecker = $this->fizzBuzz->fizzDivisibleChecker(3);

        $this->assertTrue($divisibleChecker);
    }

    /**
     * @test
     */
    public function givenNumberNotDivisibleBy5ReturnsBuzzFalse(): void{
        $divisibleChecker = $this->fizzBuzz->buzzDivisibleChecker(1);

        $this->assertFalse($divisibleChecker);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy5ReturnsBuzzTrue(): void{
        $divisibleChecker = $this->fizzBuzz->buzzDivisibleChecker(5);

        $this->assertTrue($divisibleChecker);
    }

    /**
     * @test
     */
    public function givenNumberNotDivisibleBy3And5ReturnsFizzBuzzFalse(): void{
        $divisibleChecker = $this->fizzBuzz->fizzBuzzDivisibleChecker(10);

        $this->assertFalse($divisibleChecker);
    }

    /**
     * @test
     */
    public function givenNumberDivisibleBy3And5ReturnsFizzBuzzTrue(): void{
        $divisibleChecker = $this->fizzBuzz->fizzBuzzDivisibleChecker(15);

        $this->assertTrue($divisibleChecker);
    }

    /**
     * @test
     */
    public function givenNumberFizzReturnsFizzWord(): void{
        $convertChecker = $this->fizzBuzz->convert(3);

        $this->assertEquals('Fizz',$convertChecker);

    }

    /**
     * @test
     */
    public function givenNumberBuzzReturnsBuzzWord(): void{
        $convertChecker = $this->fizzBuzz->convert(5);

        $this->assertEquals('Buzz',$convertChecker);
    }

    /**
     * @test
     */
    public function givenNumberFizzBuzzReturnsFizzBuzzWord(): void{
        $convertChecker = $this->fizzBuzz->convert(15);

        $this->assertEquals('FizzBuzz',$convertChecker);
    }

    /**
     * @test
     */
    public function givenNumberNotContains3ReturnsFizzFalse(): void{
        $containsChecker = $this->fizzBuzz->fizzContainsChecker(12);

        $this->assertFalse($containsChecker);
    }

    /**
     * @test
     */
    public function givenNumberContains3ReturnsFizzTrue(): void{
        $containsChecker = $this->fizzBuzz->fizzContainsChecker(13);

        $this->assertTrue($containsChecker);
    }

    /**
     * @test
     */
    public function givenNumberNotContains5ReturnsBuzzFalse(): void{
        $containsChecker = $this->fizzBuzz->buzzContainsChecker(12);

        $this->assertFalse($containsChecker);
    }

    /**
     * @test
     */
    public function givenNumberContains5ReturnsBuzzTrue(): void{
        $containsChecker = $this->fizzBuzz->buzzContainsChecker(15);

        $this->assertTrue($containsChecker);
    }
}
