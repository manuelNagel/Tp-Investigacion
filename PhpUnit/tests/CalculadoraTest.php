<?php

class CalculadoraTest extends \PHPUnit\Framework\TestCase {
    public function testAdd(){
        $calculadora = new Modelo\Calculadora;
        
        $resultado = $calculadora->add(20,5);

        $this->assertEquals(25,$resultado);
    }

    public function testSubtract(){
        $calculadora = new Modelo\Calculadora;
        $resultado = $calculadora->subtract(20,5);

        $this->assertEquals(15,$resultado);
    }

    public function testDivisionFail(){
        $calculadora = new Modelo\Calculadora;

        $this->expectException(DivisionByZeroError::class);

        $calculadora->divide(5, 0);
    }
}
?>