<?php
/* Operadores de Array*/

//Unindo valores de arrays +
$array1 = [0 => 'PHPBA', '1' => 'PHPSP', 2 => 'PHPSE'];
$array2 = [3 => 'he4rtdevs'];

print_r($array1 + $array2);
//print_r — Imprime informação sobre uma variável de forma legível

//print_r(), var_dump() e var_export() mostrarão também propriedades 
//protegidas e privadas de objetos com PHP 5. Membros de classes estáticas não serão mostrados.


//Verificando se os arrays são iguais == 
$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 == $array2;
//retornos em 1 são true ou verdadeiro
//enquanto 2 será false ou negativo

//Verificando se os arrays são diferentes != ou <>
$array1 = [0 => 1];
$array2 = [0 => 2];

echo $array1 != $array2;

//Verificando se os valores passados são iguais ===,
//neste caso se refere ao tipo se é inteiro, float, string....

$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 === $array2;

//Verificando se os valores são identicos tanto em valor tanto em tipo de dado !===
$array1 = [0 => 1];
$array2 = [0 => '1'];

echo $array1 !== $array2;
