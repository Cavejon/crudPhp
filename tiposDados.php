<?php

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
 