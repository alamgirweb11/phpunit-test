<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTrueIsTrue(): void
    {
        $this->assertTrue(true);
    }
    
    public function testAddition(): void
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}