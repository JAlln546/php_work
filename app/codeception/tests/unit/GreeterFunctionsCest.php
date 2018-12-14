<?php 

require 'greeter.php';

class GreeterFunctionsCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function testGreeterFunction(UnitTester $I)
    {
        $sallyResult = greeter("Sally");
        $I->assertEqual($sallyResult, "Hello, Sally. Welcome to my site.");
    }
}
