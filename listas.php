<?php

$idadeList = [21, 23, 25, 19, 30, 41, 18];

//para passar as idades para variáveis especídficas:
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
//ele usa a localização de índice e passa na ordem




//para acessar o dado é através do índice
$umaIdade = $idadeList[2]; 

$alunos = ["Maria", "João","Carol", "Katarina"];

for ($i=0; $i < count($alunos); $i++) {
    echo $alunos[$i] . PHP_EOL;
}