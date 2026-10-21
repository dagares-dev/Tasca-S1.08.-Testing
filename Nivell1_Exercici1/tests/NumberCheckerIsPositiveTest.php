<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class NumberCheckerIsPositiveTest extends TestCase
{
    public function testIsPositiveReturnsFalseForZero(): void
    {
        $numberChecker = new NumberChecker(0);
        $this->assertFalse($numberChecker->isPositive());
    }

    public function testIsPositiveReturnsTrueForEleven(): void
    {
        $numberChecker = new NumberChecker(11);
        $this->assertTrue($numberChecker->isPositive());
    }

    public function testIsPositiveReturnsFalseForNegativeThree(): void
    {
        $numberChecker = new NumberChecker(-3);
        $this->assertFalse($numberChecker->isPositive());
    }
}