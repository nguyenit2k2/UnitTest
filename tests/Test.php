<?php

class Test extends \PHPUnit\Framework\TestCase{
    public function testAdd() {

        $calculator = new App\Calculator;
        $result = $calculator->add(20,5);

        $this->assertEquals(25,$result);
    }
    public function testSubtract() {

        $calculator = new App\Calculator;
        $result = $calculator->subtract(11,5);

        $this->assertEquals(6,$result);
    }
    public function testMultiply(){

        $calculator = new App\Calculator;
        $result = $calculator->multiply(3,5);

        $this->assertEquals(15,$result);
    }
    public function testDivide(){

        $calculator = new App\Calculator;
        $result = $calculator->divide(10,5);

        $this->assertEquals(2,$result);
    }
    public function testPrime() {

        $prime = new App\CheckPrime;
        $check = $prime->checkPrime(2);

        $this->assertTrue($check);
    }

}