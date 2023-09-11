<?php

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


