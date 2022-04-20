<?php
//função recebe parâmetro
function exibeMensagem($mensagem)
 {
    echo $mensagem . PHP_EOL; 
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular'=>'Vinicius',
        'saldo' => 1000
    ],
    '123.456.489-10' =>[
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '163.456.489-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

if (500 > $contasCorrentes ['123.456.489-10']['saldo']){
    exibeMensagem("Você não pode sacar");
}else {
    $contasCorrentes['123.456.489-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes ['163.456.489-12']['saldo']){
    exibeMensagem("Você não pode sacar");
} else {
    $contasCorrentes['163.456.489-12']['saldo'] -= 500;
}


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
