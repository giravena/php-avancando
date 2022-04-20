<?php

require 'funcoes.php';

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

titularComLetrasMaiusculas ($contasCorrentes['123.456.789-10']);

unset($contasCorrentes['163.456.489-12']);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3> <?= $conta['titular']; ?> - <?= $cpf; ?> <h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
        </dl>
</body>
</html>