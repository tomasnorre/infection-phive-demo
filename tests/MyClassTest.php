<?php

declare(strict_types=1);

namespace TNM\InfectionPhiveTest\Tests;

use PHPUnit\Framework\TestCase;
use TNM\infectionPhiveTest\MyClass;

/**
 * @covers \TNM\infectionPhiveTest\MyClass
 */
class MyClassTest extends TestCase
{

    public function testMyClassInstance(): void
    {
        $string  = 'this is a test';

        $myClass = new MyClass($string);
        self::assertInstanceOf(MyClass::class, $myClass);
        self::assertEquals(
            $string,
            $myClass->getName()
        );
    }
}