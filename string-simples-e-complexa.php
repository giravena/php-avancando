<?php
//função recebe parâmetro

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem ("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function deposito(array $conta, float $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    }else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
 {
    echo $mensagem . PHP_EOL; 
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular'=>'Vinicius',
        'saldo' => 100
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


$contasCorrentes['123.456.789-10'] = deposito($contasCorrentes['123.456.789-10'], 900);
$contasCorrentes['123.456.489-10'] = sacar($contasCorrentes['123.456.489-10'], 500);


//simples
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
         "$cpf $conta[titular] $conta[saldo]"
    );
}
//complexa
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
         "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}

