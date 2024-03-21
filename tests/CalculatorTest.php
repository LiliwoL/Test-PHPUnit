<?php

use PHPUnit\Framework\TestCase;

// Inclusion du fichier des fonctions à tester
include(__DIR__ . '/../src/Calculator.php');

/**
 * Test de la classe Calculator
 * @covers Calculator
 */
class CalculatorTest extends TestCase
{
    /**
     * Test de la fonction add
     * @covers Calculator::add
     * @return void
     */
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    /**
     * Test de la fonction sub
     * @covers Calculator::sub
     * @return void
     */
    public function testSub()
    {
        $calculator = new Calculator();
        $result = $calculator->sub(2, 1);
        $this->assertEquals(1, $result);
    }

    /**
     * Test de la fonction mul
     * @covers Calculator::mul
     * @return void
     */
    public function testMul()
    {
        $calculator = new Calculator();
        $result = $calculator->mul(2, 3);
        $this->assertEquals(6, $result);
    }

    /**
     * Test de la fonction div
     * @covers Calculator::div
     * @return void
     */
    public function testDiv()
    {
        $calculator = new Calculator();
        $result = $calculator->div(6, 3);
        $this->assertEquals(2, $result);
    }
}