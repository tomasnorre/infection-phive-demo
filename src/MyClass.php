<?php

declare(strict_types=1);

namespace TNM\infectionPhiveTest;

class MyClass
{
    public function __construct(private readonly string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}