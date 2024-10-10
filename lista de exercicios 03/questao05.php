<h3>5 - Crie programa em php que exclui o arquivo exemplo.txt. Certifique-se de que o arquivo existe antes de tentar excluí-lo.
</h3>
<?php
    $arquivo = "exemplo02.txt";
    $mensagem = "Esse arquivo será excluido!\r\n";
    $arquivoAberto = fopen($arquivo, "a");
    fwrite($arquivoAberto, $mensagem);
    fclose($arquivoAberto);
    unlink("$arquivo");
?>