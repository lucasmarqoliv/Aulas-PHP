<?php

include ('ContaBancaria.php');

$ContaBancaria01 = new ContaBancaria('Lucas', 0);

echo 'Valor atual na conta: R$'.$ContaBancaria01 -> getSaldo().'<br>';

echo 'Valor depositado: R$'.$ContaBancaria01 -> depositar(5000).'<br>';

echo $ContaBancaria01 -> sacar(2500).'<br>';

echo 'Valor apos o saque: R$'.$ContaBancaria01 -> getSaldo().'<br>';

