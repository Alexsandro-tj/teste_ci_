<?php 

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculadora.php';

class CalculadoraTest extends TestCase
{
    public function testSomarDoisNumeros(): void
    {
        $calculadora = new Calculadora();

        $resultado = $calculadora->somar(2, 3);

        $this->assertSame(5, $resultado);
    }
}




?>