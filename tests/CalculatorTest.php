<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;
    
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
    
    public function testAdd(): void
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubtract(): void
    {
        $result = $this->calculator->subtract(10, 4);
        $this->assertEquals(6, $result);
    }
    
    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(7, 6);
        $this->assertEquals(42, $result);
    }
    
    public function testDivide(): void
    {
        $result = $this->calculator->divide(10, 2);
        $this->assertEquals(5, $result);
    }
    
    public function testDivideByZeroThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero");
        
        $this->calculator->divide(10, 0);
    }
    
    /**
     * @dataProvider additionProvider
     */
    public function testAddWithDataProvider(int $a, int $b, int $expected): void
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }
    
    public static function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [1, 1, 2],
            [10, -5, 5],
            [-3, -7, -10]
        ];
    }
}