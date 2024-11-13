
<?php

include('Pessoa.php');

$pessoa01 = new Pessoa('Lucas Marques');


$pessoa01->setIdade(-7);
echo $pessoa01->getIdade();