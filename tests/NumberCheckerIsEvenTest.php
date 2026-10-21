<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class NumberCheckerIsEvenTest extends TestCase
{
    public function testIsEvenReturnsTrueForZero(): void
    {
        $numberChecker = new NumberChecker(0);
        $this->assertTrue($numberChecker->isEven());
    }

    public function testIsEvenReturnsTrueForFour(): void
    {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());
    }

    public function testIsEvenReturnsFalseForSeven(): void
    {
        $numberChecker = new NumberChecker(7);
        $this->assertFalse($numberChecker->isEven());
    }
    
    public function testIsEvenReturnsFalseForNegativeFive(): void
    {
        $numberChecker = new NumberChecker(-5);
        $this->assertFalse($numberChecker->isEven());
    }

    public function testIsEvenReturnsTrueForNegativeEight(): void
    {
        $numberChecker = new NumberChecker(-8);
        $this->assertTrue($numberChecker->isEven());
    }
}