<?php

// Ugly but easy for now - testing the test class :)
require_once 'TestClass.php';

class TestClassTest extends \PHPUnit_Framework_TestCase
{

    public function numbers()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [10, 10, 20],
            [-10, 10, 0]
        ];
    }

    /**
     * @dataProvider numbers
     */
    public function testAdditionWorksAsExpected($x, $y, $z)
    {
        $obj = new TestClass();
        $this->assertEquals($obj->add($x, $y), $z);
    }

}