
<?php

include('Pessoa.php');

$pessoa01 = new Pessoa('Lucas Marques');

$pessoa01 -> setIdade(28);

echo 'O nome da pessoa é: '.$pessoa01 -> nome. ', '.'E sua idade é: '. $pessoa01 -> setIdade(28).' anos.';