
<?php

include ('Aluno.php');

$aluno01 = new Aluno('Lucas Marques');

$aluno01->setNota(10);

echo 'O nome do Aluno é: '.$aluno01->nome. ', E sua nota foi: '.$aluno01->getNota();



