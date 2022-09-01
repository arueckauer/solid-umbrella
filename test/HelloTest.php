<?php

declare(strict_types=1);

namespace SolidUmbrellaTest;

use PHPUnit\Framework\TestCase;
use SolidUmbrella\Hello;

class HelloTest extends TestCase
{
    public function test___invoke(): void
    {
        $hello = new Hello();
        self::assertSame('Hello, World!', $hello('World'));
    }
}
