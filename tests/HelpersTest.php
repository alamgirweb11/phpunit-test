<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/helpers.php';

class HelpersTest extends TestCase
{
    public function testAddNumbers(): void
    {
        $result = addNumbers(5, 3);
        $this->assertEquals(8, $result);
    }
    
    public function testGreet(): void
    {
        $result = greet("Alamgir");
        $this->assertEquals("Hello, Alamgir!", $result);
    }
}