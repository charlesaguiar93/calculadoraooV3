<?php

final class TrataeMostra {

    //Método estático que exibe o resultado ou mensagem de erro


//: void - apenas exibe, não retorna valor 
public static function exibirResultado(?string $er, string $oper,?float $v1, ?float $v2, ?float $resultado) : void {

echo "<h1>Resultado</h1>";

if (!empty($er)){
    echo '<p class="error">' . htmlspecialchars($er, ENT_QUOTES, 'UTF-8') .'</p>';


}else{
    echo  '<p>Operação: <strong>' . htmlspecialchars($oper, ENT_QUOTES, 'UTF-8') .'</strong></p>';
    echo '<p>' . htmlspecialchars($v1, ENT_QUOTES, 'UTF-8') .  '';
    
    switch ($oper){
        case 'somar':
            echo ' + ';
            break;
        case 'subtrair':
            echo ' - ';
            break;
        case 'multiplicar':
            echo ' × ';
            break;
        case 'dividir':
            echo ' ÷ ';
            break;
    }

    echo '' . htmlspecialchars($v2, ENT_QUOTES, 'UTF-8');
    echo ' = <strong>' . htmlspecialchars($resultado, ENT_QUOTES, 'UTF-8') . '</strong></p>';
}

echo '<p><a href="index.html">Voltar</a></p>';

//Método estático que limpa/valida os dados de entrada





}
public static function parse_num($val) : ?float{
    // remove espaços
    $s = trim($val);
    // troca vírgula por ponto (aceitar 1,5 como 1.5)
    $s = str_replace(',', '.', $s);
    // remover qualquer caractere que não seja dígito, sinal, ou ponto - assim mantemos entrda simples
    // importante: para fins didáticos - em produção, use validação mais robusta
    if (!preg_match('/^\s*[+-]?\d+(?:[\.,]\d+)?\s*$/', $s)) {
        return null; // entrada inválida
    }
    return floatval($s);

}


}

?>