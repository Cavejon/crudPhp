<?php

/*Operadores de Arrays*/
//1° forma de uso dos arrays seria declarando os valores dentro do array já:

$pessoas = [

    'name' => 'Pedro Lucas Cavejon',
    'age' => 21,
    'city' => 'Joinville'

];

var_dump($pessoas);

//2° forma de uso
//podemos declara um array desta forma sem definir o tamanho
//no php o length será infinito
$pessoa = [];


$pessoa['name'] = 'Pedro';
$pessoa['age'] = 20;
$pessoa['city'] = 'Joinville';

var_dump($pessoa);

//3° forma de realizar

$pessoaIncial['x'] = 'vaiKaralho';
$pessoaIncial[] = 'vaiKaralho';
$pessoaIncial[] = 'vaiKaralho';
$pessoaIncial[] = 'vaiKaralho';

var_dump($pessoaIncial);

//Como acessar a posição do array

var_dump($pessoa['name']) .PHP_EOL;

//declarar a variável e definir o dado que será solicitado