<?php
// Framework de tests PHPUNIT
use PHPUnit\Framework\TestCase;

use App\Calculator;

class CalculatorTest extends TestCase{

    protected Calculator $calculator;

    public function setUp():void{
        $this->calculator = new Calculator(2);
    }


     /**
     * @dataProvider additionProvider
     */
    public function testAdditioner($a, $b, $expect){
        $this->assertEquals($this->calculator->add($a, $b), $expect);
    }

    /**
     * @dataProvider divideProvider
     */
    public function testDivide($a, $b, $expect){
        $this->assertEquals($this->calculator->division($a, $b), $expect);
    }

    /**
     * @dataProvider divideByNullProvider
     */
    public function testDivideByNull($a, $b, $expect){
        $this->expectException(DivisionByZeroError::class);
        $this->expectExceptionMessage('Impossible de diviser par zéro');
        $this->assertSame($this->calculator->division($a, $b), $expect);
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0], // $a, $b, $expected
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }

    public function divideProvider()
    {
        return [
            [10, 2, 5], // $a, $b, $expected
            [4, 4, 1],
            [3, 4, 0.75],
            [9, 7, 1.29]
        ];
    }

    public function divideByNullProvider()
    {
        return [
            [15, 0, 0], // $a, $b, $expected
            [5, 0, 0],
            [133, 0, 0],
            [12, 0, 0]
        ];
    }
}