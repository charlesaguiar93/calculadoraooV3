<?php
/*Descarrega o arquivo Calculadora.php e
TrataeMostra.php que, respectivamente,
contém as classes Calculadora  e TrataeMostra
neste Script. 
*/
/*- require_once 'config.php'; para acessar o arquivo calculadora.php em outra pasta
- include - executa o arquivo mesmo que haja erro e executa o arquivo mais de uma vez
- require - interrompe a execução do script em caso de erro e só executa o arquivo uma vez
- once - impede que o arquivo seja incluído mais de uma vez
*/ 
require_once 'Calculadora.php';
require_once 'TrataeMostra.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        // Recebendo os valores e a operação

        $valor1 = $_POST['valor1'] ?? '';
        $valor2 = $_POST['valor2'] ?? '';
        $operacao = $_POST['operacao'] ?? '';
        // Validação dos dados

        /*Converte e valida os números recebidos a partir da chamada do método estático parse_num()
        que encontra-se na classe Calculadora.*/

        $val1 = TrataeMostra::parse_num($valor1);
        $val2 = TrataeMostra::parse_num($valor2);

        $result = null;
        $error = null;

        //Instancia o objetivo da calculadora
        $calcoper = new Calculadora();


        
        if ($val1 === null || $val2 === null){

            $error = 'Entrada inválida. Certifique-se de informar números válidos.';


        }else{


            /*
            De acordo com a operação escolhida, executa a operação a partir da chamada 
            do método estático correspondente da operação que encontra-se na classe
            estática Calculadora.

            */

            switch ($operacao){
                case 'somar':
                    $result = $calcoper->somar($val1, $val2);
                    break;
                case 'subtrair':
                    $result = $calcoper->subtrair($val1, $val2);
                    break;
                case 'multiplicar':
                    $result = $calcoper->multiplicar($val1, $val2);
                    break;
                case 'dividir':

                    if ($val2 == 0){
                        $error = 'Erro: Divisão por zero não é permitida.';
                    
               }else{
                        $result = $calcoper->dividir($val1, $val2);
                    }
                    break;
                    default:
                    $error = 'Operação inválida.';
                    break;

        }//finaliza switch
        }//finaliza else
      
        /*Exibir resultado chamando o método estático exibirResultado()
        que encontra-se na classe estática Calculadora.
       */

       TrataeMostra::exibirResultado($error,$operacao,$val1,$val2,$result);



    }








?>