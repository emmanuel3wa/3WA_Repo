<?php
// Framework de tests PHPUNIT
use PHPUnit\Framework\TestCase;


class Fibotest extends TestCase{

    protected Fibo $fibo;

    public function setUp():void{
        $this->fibo = new Fibo();
    }

    public function testGenerator(){

        $fibo_generated = $this->fibo->gen();

        foreach ($fibo_generated as $n){
        }


        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Cannot traverse an already closed generator');
        foreach ($fibo_generated as $n){
            $this->assertEquals($n, null);
        }
    }

    public function testFiboAlgorythm(){
        $fibo_generated = $this->fibo->gen();

        $i = 0;
        $res = $this->fiboTestResult();
        foreach ($fibo_generated as $n){
            $this->assertEquals($n, $res[$i]);
            $i++;
        }

    }

    public function testFiboMax(){
        $fibo = new Fibo(20);
        $i = 0;
        $res = $this->fiboTestResult();
        foreach ($fibo->gen() as $n){
            $i++;
        }
        $this->assertEquals($i, 20 + 2);
    }

    public function testNarcissiqueNumber(){

        $this->assertEquals($this->fibo->ifNarcissiqueNum(153), true);
        $this->assertEquals($this->fibo->ifNarcissiqueNum(14), false);
    }

    public function fiboTestResult()
    {
        return [
           1, 1, 2, 3,
           5,
           8,
           13,
           21,
           34,
           55,
           89,
           144,
           233,
           377,
           610,
           987,
           1597,
        ];
    }

}