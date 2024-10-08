<h3>9 - Crie programa em php que escreve os dados de um array associativo em um arquivo CSV chamado dados.csv.
</h3>
<?php
    $arquivo = "dados.csv";
    $mensagem = "[1,2,3,4,5,6]\r\n";
    $arquivoAberto = fopen($arquivo, "a");
    fwrite($arquivoAberto, $mensagem);
    fclose($arquivoAberto);
?>