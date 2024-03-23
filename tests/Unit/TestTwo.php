<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestTwo extends TestCase
{
    public function isNotArray(): void
    {
        $this->assertIsArray(10);
    }
}