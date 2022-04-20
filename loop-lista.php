<?php

$idadeList = [21, 23, 25, 19, 30, 41, 18];

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

//para contar o tamanho da lita 
echo count ($idadeList) . PHP_EOL;

//podemos substituir o numero do tamnho da lista pelo count~
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}