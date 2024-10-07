<?php
// Verifica se a requisição foi feita via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recebe o dado enviado pelo formulário através do método POST
    $dado = $_POST['dado'];

    // Define o nome do arquivo onde o dado será salvo
    $arquivo = 'dados.txt';

    // Abre o arquivo no modo 'a' (append), para adicionar dados ao final
    $arquivo_aberto = fopen($arquivo, 'a');

    // Escreve o dado no arquivo, adicionando uma nova linha no final
    fwrite($arquivo_aberto, $dado . "\r\n"); // "\r\n" adiciona uma nova linha (Windows)

    // Fecha o arquivo após a escrita
    fclose($arquivo_aberto);

    // Exibe uma mensagem confirmando que o dado foi salvo
    echo "Dado salvo com sucesso!";
} else {
    // Caso a requisição não seja POST, exibe uma mensagem de erro
    echo "Método de requisição inválido!";
}
?>
