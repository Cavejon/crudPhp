<?php

//Podemos ter várias condições verdadeiras mas temos uma que será false
//sempre quando for um else servirá para ser negado
$name = $argv[1];

//If else estrutura simples
if($name == "Cavejon"){
    echo "Seja bem vindo ". $name;
}else if($name == "PedroLucas"){
    echo "Seja bem vindo" .$name;
}else{
    echo "Acesso negado";
}

$age = $argv[1];

if($age >= 21){
    echo "Você é maior de idade no EUA";
}elseif($age >= 18){
    echo "Você é maior de idade no Brasil";
}else{
    echo "Você é menor de idade";
}
