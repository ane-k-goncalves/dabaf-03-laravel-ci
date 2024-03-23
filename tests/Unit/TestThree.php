<?php

namespace Tests\Unit;

use Hamcrest\Type\IsString;
use PHPUnit\Framework\TestCase;

class TestThree extends TestCase
{

    public function IsString(): void
    {
        $this->assertIsString("string");
    }
}