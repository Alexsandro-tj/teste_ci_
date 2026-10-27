<?php
//  teste de CI


class Calculadora
{

    public int $a, $b, $resultado;

    public function somar(int $a, int $b): int
    {
        return $this->resultado =  $this->a = $a + $this->b = $b;
    }
}

$calculo = new Calculadora;
$calculo->somar(10,20);

print_r($calculo);


