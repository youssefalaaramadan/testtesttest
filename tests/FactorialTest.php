<?php
use PHPUnit\Framework\TestCase;
require './src/factorial.php';
class FactorialTest extends TestCase
{
    public function testfactorial() {
        $calc= new factorial;

        $test1= $calc->factorial(0);

        $test2= $calc->factorial(1);

        $test3= $calc->factorial(5);

        $num = random_int (5, 100);

        $test4= $calc->factorial($n);

        $test5= $calc->factorial(-3);

        $test6= $calc->factorial(1.5);

        $test7= $calc->factorial(false);

        $test8= $calc->factorial('abc');


        $this->assertEquals (1,$test1);
        
        $this->assertEquals (1,$test2);

        $this->assertEquals (120,$test3);

        $this->assertEquals ($calc -> factorial($n-1) * $n, $test4);

        $this->assertEquals (null,$test5);

        $this->assertEquals (null,$test6);

        $this->assertEquals (null,$test7);

        $this->assertEquals (null,$test8);
    }
}
?>