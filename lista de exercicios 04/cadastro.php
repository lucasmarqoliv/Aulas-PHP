<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $action = $_POST["action"];
        
        $nome = $_POST["nome"];
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = $_POST["senha"];
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
        $dataNascimento = $_POST["data"];
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        $rg = filter_input(INPUT_POST, "rg", FILTER_SANITIZE_SPECIAL_CHARS);
        $rg = preg_replace("/[^0-9A-Za-z]/", "", $rg);

        $arquivo = "dados.txt";

        $arquivoAberto = fopen($arquivo, "a");
        fwrite($arquivoAberto, "Nome: ". $nome ."\r\n". "E-mail: ". $email . "\r\n". "Senha: ". $senhaCriptografada . "\r\n". "Data de Nascimento: ". $dataNascimento . "\r\n". "CPF: ". $cpf . "\r\n". "RG: ". $rg . "\r\n");

        fclose($arquivoAberto);

        echo "Dados enviados com sucesso!";
        header("Location: login.html");
        exit;
    }
    if ($action === "login") {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = $_POST["senha"];

        $arquivo = "dados.txt";
        $usuarios = file($arquivo, FILE_IGNORE_NEW_LINES);
        $loginSucesso = false;

        foreach ($usuarios as $usuario) {
            
        }
    }
?>