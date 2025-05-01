<?php

echo "Insira o primeiro número\n";
$primeiroNumero = fgets (STDIN); 

echo "Insira o segundo número\n";
$segundoNumero = fgets (STDIN);

echo "Selecione a operação que deseja realizar\n";
echo "1. Soma\n";
echo "2. Subtração\n";
echo "3. Multiplicação\n";
echo "4. Divisão\n";

$operacao = fgets (STDIN);

function operacoes($primeiroNumero, $segundoNumero, $operacao) {
    switch ($operacao) {
        case 1:
            $resultadoSoma = $primeiroNumero + $segundoNumero;
            echo "O resultado da soma é: $resultadoSoma";
            break;
        case 2: 
            $resultadoSubtracao = $primeiroNumero - $segundoNumero;
            echo "O resultado da subtração é: $resultadoSubtracao";
            break;
        case 3:
            $resultadoMultiplicacao = $primeiroNumero * $segundoNumero;
            echo "O resultado da subtração é: $resultadoMultiplicacao";
            break;
        case 4:
            if ($segundoNumero != 0) {
                $resultadoDivisao = $primeiroNumero / $segundoNumero;
                echo "O resultado da subtração é: $resultadoDivisao";
            } else {
                echo "Divisão inválida";
            }
            break;
        }
}

operacoes($primeiroNumero, $segundoNumero, $operacao);