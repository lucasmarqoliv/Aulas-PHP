<h3>14 - Faça programa em php que grava mensagens de log em um arquivo chamado logs.txt, incluindo a data e hora em que cada mensagem foi registrada.
</h3>
<?php
    date_default_timezone_set('America/Sao_Paulo');
    $arquivo = "logs.txt";
    $arquivoAberto = fopen($arquivo, "a");
    fwrite($arquivoAberto, "teste - " . date('d-m-Y H:i:s') . PHP_EOL);
    fclose($arquivoAberto);
?>