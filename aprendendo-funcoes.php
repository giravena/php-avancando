<?php

//na matemática, funções recebem um parâmetro e devolvem um resultado 

//f(x) = x + 2;
//f(5) = 5 + 2;
//f(5) = 7;

//como fazer essa mesma função em php?
function adiciona2 ($x) {
    return $x + 2;
}

$sete = adiciona2(5);
echo $sete;

