<?php

include('Emprestimo.php');
include('Membro.php');
include('Livro.php');


$emprestimo01 = new Emprestimo(01, '2024-11-07', '2024-11-08', 0, '06978698745');
$membro01 = new Membro('06978698745', 'Rua Gonçalves Ledo, 2519, Real Copagre, Teresina - PI', 'Lucas Marques');
$livro01 = new Livro(2024, 'Clean code', 200);

