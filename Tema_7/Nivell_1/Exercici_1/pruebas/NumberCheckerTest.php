<?php
namespace TEST;

use APP\NumberChecker;
use PHPUnit\Framework\TestCase;
use TypeError; 

final class NumberCheckerTest extends TestCase
{
    public function test_isPositive()
    {
        $numberChecker = new NumberChecker(2); 

        $this->assertTrue($numberChecker->isEven());
        $this->assertTrue($numberChecker->isPositive());

    }
    public function test_isNegative()
    {
        $numberChecker = new NumberChecker(-3);
        $this->assertFalse($numberChecker->isPositive());

    }

    public function test_isEven()
    {
        $numberChecker = new NumberChecker(3);
        $this->assertFalse($numberChecker->isEven());

    }
    public function test_isNull() {
        $this->expectException(TypeError::class);
        new NumberChecker(null);
    }

    public function test_isArray() {
        $this->expectException(TypeError::class);
        new NumberChecker([1, 2, 3]);
    }

    public function test_isString() {
        $this->expectException(TypeError::class);
        new NumberChecker("Gato");
    }

    public function test_isEmoji() {
        $this->expectException(TypeError::class);
        new NumberChecker("😊");
    }


}



?>