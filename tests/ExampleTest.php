<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{

    /**
     * @test
     */
    public function trueAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $example = new Example();

        $integerValue = $example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }

    /**
     * @test
     */
    public function isNotFizz(){
        $example = new Example();

        $integerValue = $example->fizzChecker(1);

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function isFizz(){
        $example = new Example();

        $integerValue = $example->fizzChecker(3);

        $this->assertTrue($integerValue);
    }
}
