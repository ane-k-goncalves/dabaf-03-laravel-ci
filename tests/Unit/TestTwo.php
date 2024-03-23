<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestTwo extends TestCase
{
    public function isArray(): void
    {
        $this->assertIsArray(10);
    }
}