<?php
require_once 'PHPUnit/Autoload.php';
 
 
class MyClassTest extends PHPUnit_Framework_TestCase {
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
 }
}
 
class MyClass {
 
    public function power($x, $y)
    {
        return pow($x, $y);
    }
}
?>