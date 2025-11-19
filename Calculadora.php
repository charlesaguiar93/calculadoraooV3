<?php

// ---CLASS: Calculadora (métodos estáticos) ---

final class Calculadora {

    //Método estático somar
    public function somar(float $a, float $b): float {
       return $a + $b;
    }
    //Método estático subtrair
    public function subtrair(float $a, float $b): float {
        return $a - $b;
    }
    //Método estático multiplicar
    public function multiplicar(float $a, float $b): float {
        return $a * $b;
    }
    //Método estático dividir
    public function dividir(float $a, float $b) {
        if ($b === 0.0) {
            // Retornamos string com erro para manter tipo informativo
            return "Erro: Divisão por zero não é permitida.";
        }
        return $a / $b;

}

} //Finaliza classe Calculadora 

?>