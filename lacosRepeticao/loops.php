<?php

//No caso dos loops será de utilização primária reproduzir a mesma coisa N vezes

$x = $argv[1];

for ($i = 0; $i <= $x; $i++) {
    echo "Você recebeu " . $i . " reais" . PHP_EOL;
}

$numeros = [
    20,
    32,
    55,
    100,
    10000,
    10000000
];

var_dump(count($numeros));

//Função COUNT vai contar as posições do vetor
for ($i = 0; $i < count($numeros); $i++) {
    echo "Você recebeu " . $numeros[$i] . " reais" . PHP_EOL;
}