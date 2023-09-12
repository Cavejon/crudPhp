<?php

/*Operadores de Atribuição */

$soma = 10;

$soma += 120;
echo 'Operador de atribuição funcionando com += para somar num, ', $soma . PHP_EOL;

/*Incremento e Decremento */

$variavelInteira = 30;

//o incremento na forma de sintaxe é ++
echo 'O valor da variável foi incrementado e agora é = ', ++$variavelInteira . PHP_EOL;
//Quando for incrementado será adicionado um número a contagem atual
echo 'O valor da variável continua o mesmo = ', $variavelInteira . PHP_EOL;
//o decremento é quando iremos retirar um número
echo 'O valor da variável foi incrementado e agora é = ', --$variavelInteira . PHP_EOL;

