<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o dado do input
    $dado = $_POST['dado'];

    // Especifica o nome do arquivo
    $arquivo = 'dados.txt';

    // Abre o arquivo para escrita e adiciona o dado ao final
    $arquivo_aberto = fopen($arquivo, 'a'); // 'a' para adicionar ao final
    fwrite($arquivo_aberto, $dado . PHP_EOL); // Escreve o dado no arquivo
    fclose($arquivo_aberto); // Fecha o arquivo

    // Mensagem de confirmação
    echo "Dado salvo com sucesso!";
} else {
    echo "Método de requisição inválido!";
}
?>
