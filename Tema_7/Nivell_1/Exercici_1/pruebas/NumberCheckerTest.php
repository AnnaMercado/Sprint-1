<?php
namespace TEST;

use APP\NumberChecker;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
    public function test_EvenAndPositive()
    {
        $numberChecker = new NumberChecker(2); 

        $this->assertTrue($numberChecker->isEven());
        $this->assertTrue($numberChecker->isPositive());

        $numberChecker = new NumberChecker(-3);
        $this->assertFalse($numberChecker->isPositive());

        $numberChecker = new NumberChecker(3);
        $this->assertFalse($numberChecker->isEven());
    }
}



?>