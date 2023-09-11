<?php

/*Variáveis*/

$name = "Pedro";
$idade = '20 Anos';
echo 'Meu nome é ', $name, ' tenho atualmente ', $idade, '. ';

/*
 * Tipos de dados em PHP;
 */

$string = "Pedro";
$numberInt = 10;
$numberFloat = 10.10;
$booleanTrue = true;
$booleanFalse = false;
$array = ['Pedro', 'Freeline', 'treinamento', 'Php', 2023, ['vai karalho']];

//Tipo booleano explicação sobre true or false;

$name = $argv['1'];

if ($name == 'PedroLucasCavejon') { // true
    echo 'vai caralho, certinho. ';
} else {
    echo 'Deu merda';
}

var_dump($string . PHP_EOL);
var_dump($numberInt . PHP_EOL);
var_dump($numberFloat . PHP_EOL);
var_dump($booleanTrue . PHP_EOL);
var_dump($booleanFalse . PHP_EOL);
var_dump($array . PHP_EOL);

/*Operadores Aritiméticos*/

//Somas 

$a = 10;
$b = 20;

$soma = $a + $b;
echo $soma . PHP_EOL;

//subtração

$a = 10;
$b = 20;

$sub = $a - $b;
echo $sub . PHP_EOL;

//Divisão

$a = 10;
$b = 20;

$div = $a / $b;
echo $div . PHP_EOL;

//Multiplicação

$a = 10;
$b = 20;

$multi = $a * $b;
echo $multi . PHP_EOL;


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


/* Comparação de valores*/

$idade = 20;

//var_dump(value: 'PedroCavejon' == 'PedroCavejon' . PHP_EOL);
//Maior ou Menor
var_dump($idade < 19);
var_dump($idade > 19);
//Igual
var_dump($idade == "19");
//Maior igual ou menor igual
var_dump($idade >= "19");
var_dump($idade <= "19");
//Diferente
var_dump($idade != "19");
//Não identico
var_dump($idade !== "19");


/*Combinação de Strings*/

$seguidores = rand(100, 400);
//$seguidores = 800;
//Para combinções podemos utilizar as variáveis para incrementar e retirar o estático o site
echo 'Meu instagram tem apenas ' . $seguidores . ' seguidores';

/*Concatenar significa juntar as coisas*/


//Strings uso
//com o uso das aspas duplas podemos inserir as variáveis,
// uso para quando não tiver dados dinâmicos
echo "Meu instagram tem apenas $seguidores seguidores";
//com aspas simples precisamos colocar os pontos no começo e no final da variável, 
//em casos de dados dinamicos usar aspas simples
echo 'Meu instagram tem apenas ' . $seguidores . ' seguidores';


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