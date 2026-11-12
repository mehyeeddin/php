<?php
    
$primeiro = readLine("Informe o primeiro valor(minimo):");
$segundo = readLine("Informe o segundo valor(maximo):");

$valorAleatorio = rand($primeiro, $segundo);

$acertou = false;
$tentativas = 1;

do {
    $valor = readLine("Informe um Valor: ");

    if($valor == $valorAleatorio) {
        $acertou = true;
        print("Parabens! Voce ganhou em $tentativas Tentativas !");
    } else {
        print("Que pena! Tente novamente: ");
    }
} while(!$acertou);
