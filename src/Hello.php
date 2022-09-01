<?php

declare(strict_types=1);

namespace SolidUmbrella;

class Hello
{
    public function __invoke(string $name): string
    {
        return "Hello, {$name}!";
    }
}
