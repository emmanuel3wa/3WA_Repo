<?php

use PHPUnit\Framework\TestCase;


class EvenTest extends TestCase
{
    protected Even $even;

    public function setUp():void{
        $this->even = new Even(max: 100);
    }

    public function testEvenIsPair(){
        foreach($this->even as $n){
            $this->assertEquals(($n % 2), 0);
        }
    }

    public function testEvenMax(){

        foreach($this->even as $key => $value) {
            $this->assertEquals(($key < 50), true);
        }
    }

    public function testEvenArgumentExeption(){
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Max must be more than 0.');
        $this->even = new Even(max: 0);
    }
}