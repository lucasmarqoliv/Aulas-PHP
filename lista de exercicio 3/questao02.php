<h3>2 - Crie programa em php que lê o conteúdo do arquivo exemplo.txt e exibe na tela.
</h3>
<?php
    $arquivo = "exemplo.txt";
    $tamanhoArquivo = filesize($arquivo);
    $arquivoAberto = fopen($arquivo, "r");
    while (!feof($arquivoAberto)) {
        $linha = fgets($arquivoAberto, $tamanhoArquivo);
        echo $linha. "<br>";
    }
    fclose($arquivoAberto);
?>