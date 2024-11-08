<?php

include('Emprestimo.php');

$id = $_POST['id'];
$membro_cpf = $_POST['membro_cpf'];
$data_retirada = $_POST['data_retirada'];
$data_devolucao = $_POST['data_devolucao'];
$multa = $_POST['multa'];

$emprestimo01 = new Emprestimo($id, $membro_cpf, $data_retirada, $data_devolucao, $multa);

echo "<h2>Informações do Empréstimo:</h2>";
$emprestimo01 -> exibirInformacoes();