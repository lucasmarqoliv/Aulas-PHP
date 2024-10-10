<h3>4 - Escreva uma função que recebe o nome de um arquivo e retorna o número de linhas que ele contém.
</h3>
<?php
    $arquivo = "exemplo.txt";
    $linhasContadas = count(file($arquivo));
    function contaLinhas($arquivo, $linhasContadas) {
        echo "O arquivo tem ". $linhasContadas . " linhas.";
    }
    contaLinhas($arquivo, $linhasContadas);
?>
