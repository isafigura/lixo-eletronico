<?php

$titular = "Isabela Figura";
$saldo = 1000; 

echo "**************************\n";
echo "Nome do titular: $titular\n";
echo "Saldo da conta: $saldo\n";
echo "**************************\n";
echo "Digite um número:\n";

do {
        echo "1. Consultar saldo atual\n";
        echo "2. Sacar valor\n";
        echo "3. Depositar valor\n";
        echo "4. Sair\n";
        echo "**************************\n";

        $numero = (int) fgets(STDIN);

        switch ($numero) {
                case 1:
                        echo "Saldo atual: $saldo\n";
                        break;
                
                case 2: 
                        echo "Insira o valor que deseja sacar\n";
                        $valorSaque = (float) fgets(STDIN);
                        if ($valorSaque > $saldo) {
                                echo "Saldo insuficiente\n";
                        } else {
                                $saldo -= $valorSaque;
                        }
                        break;
                
                case 3:
                        echo "Insira o valor que deseja depositar\n";
                        $valorDeposito = (float) fgets(STDIN);
                        $saldo += $valorDeposito;
                        break;
                
                case 4:
                        echo "Adeus";
                        break;

                default: 
                        "Opção inválida\n";
                        break;
        }
} while ($numero != 4);