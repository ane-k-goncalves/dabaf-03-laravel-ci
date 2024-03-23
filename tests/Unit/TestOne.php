<?php

namespace Tests\Unit;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class TestOne extends TestCase
{
    public function dateEquals(): void
    {
        $expected = new DateTimeImmutable('2024-03-23 15:28:45');
        $actual = new DateTimeImmutable('2024-03-23 15:29:04');

        $this->assertEquals($expected, $actual);
    }
}