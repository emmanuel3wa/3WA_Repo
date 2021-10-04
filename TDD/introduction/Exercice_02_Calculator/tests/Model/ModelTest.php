<?php
// Framework de tests PHPUNIT
use PHPUnit\Framework\TestCase;

use App\Model\Add;
use App\Model\Divisor;
use App\Model\Number;
use App\Model\NumberString;

class ModelTest extends TestCase{

    protected Add $add;
    protected Divisor $divisor;

    
    public function setUp():void{
        $this->divisor = new Divisor();
        $this->add = new Add();
    }

    public function testAdd(){
        $this->assertEquals($this->add->add(new Number(1), new Number(3)), new NumberString(4));
    }

    public function testDivisor(){
        $this->assertEquals($this->divisor->division(new Number(4), new Number(2)), new NumberString(2));
    }

    public function testExceptionDivisor(){
        $this->expectException(DivisionByZeroError::class);
        $this->expectExceptionMessage('Impossible de diviser par zéro.');
        $this->assertEquals($this->divisor->division(new Number(4), new Number(0)), new NumberString(0));
    }
}