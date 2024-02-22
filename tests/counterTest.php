<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Counter;

class CounterTest extends TestCase
{
    public function testCounter(): void
    {
        $demo = new Counter();
        for ($i = 0; $i < 10; $i++) {
            $demo->increment();
        }

        $count = $demo->getCount();
        $this->assertEquals(
            10,
            $count,
            "After 10 increments, 
            the counter should return a count of 10! 
            But the count was $count!"
        );
    }
}
