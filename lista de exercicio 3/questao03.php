<h3>3 - Modifique o script anterior para adicionar a linha "Bem-vindo ao PHP!" ao final do arquivo exemplo.txt.
</h3>
<?php
    $arquivo = "exemplo.txt";
    $mensagem = "Bem-vindo ao PHP\r\n";
    $arquivoAberto = fopen($arquivo, "a");
    fwrite($arquivoAberto, $mensagem);
    fclose($arquivoAberto);
?>