<h3>11 - Modifique o script do arquivo CSV para que ele adicione uma nova linha de dados ao final do arquivo.
</h3>
<?php
    $arquivo = "dados.csv";
    $arquivoAberto = fopen($arquivo, "a");
    fwrite($arquivoAberto, "[1,2,3,4,5,6]\r\n");
    fclose($arquivoAberto);
?>