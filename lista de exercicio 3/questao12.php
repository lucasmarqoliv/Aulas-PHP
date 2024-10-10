<h3>12 - Crie programa em php que lê um arquivo grande linha por linha, processando cada linha e exibindo o número da linha.
</h3>
<?php
    $arquivo = "dados.csv";
    $linhasContadas = count(file($arquivo));
    function contaLinhas($arquivo, $linhasContadas) {
        echo "O arquivo tem ".$linhasContadas. " linhas.";
    }
    contaLinhas($arquivo, $linhasContadas);
?>