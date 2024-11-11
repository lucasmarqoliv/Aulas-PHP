
<?php

include ('Funcionario.php');

$funcionario01 = new Funcionario('Lucas Marques');

$funcionario01 -> setSalario(5200);

echo 'O nome do funcionario é: '.$funcionario01 -> nome. ', Seu salario é: R$ '.$funcionario01 -> getSalario().', E o seu bonus é: R$ '.$funcionario01 -> calculaBonus();