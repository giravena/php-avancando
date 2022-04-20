<?php

//podemos adicionar todos em uma lista 

$contasCorrentes = [
    12345678910 => [
        'titular'=>'Vinicius',
        'saldo' => 1000
    ],
    12345648910 =>[
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    16345648912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// para adicionar um elemento na lista:
$contasCorrentes[18545648912] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

//acessando com foreach e tambem acessando o índice 

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}


