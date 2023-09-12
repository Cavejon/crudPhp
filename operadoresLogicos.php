<?php
//Operadores lógicos serão boolean para retornos TRUE or False
//se caracterizam com && ou OR

//As condições impostas precisam ser verdadeiras para que seja retornado true
//Caso uma não seja retorna falso
$name = 'Cavejon';
$isAlive = false;

//&& se a primeira condição E a outra condição.
var_dump($name && $isAlive); 
//OR se a primeira for verdadeira OU a outra condição, verifica quem será true
var_dump($name OR $isAlive);
// || se a primeira for verdadeira OU a outra condição, verifica quem será true.
var_dump($name || $isAlive);


//XOR retorna se um dos operadores são verdadeiros, mas caso ambos sejam verdadeiros
//irá retornar False

$name = 'Cavejon';
$isAlive = true;


//var_dump($name ^ $isAlive);


//NOT !, not é o operador de negação
//funcoina nos IF's

$name = 'Cavejon';
$isAlive = true;

if(!$isAlive){ //Aqui estou negando que ele está vivo
    echo 'Morreu legal';
}