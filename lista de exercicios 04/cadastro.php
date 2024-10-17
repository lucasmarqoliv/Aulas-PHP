<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $action = $_POST["action"]; // criação de uma variavel para diferenciar entre as duas ações dos dois formularios. (cadastro e login).
        
        if ($action === "registrer") { // verifica se a variavel criada tem o value de cadasatro. (registrer)

        $nome = $_POST["nome"];
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); // define um filtro para esse campo, para quando ele for comparado na verificação de login. e aplica um higienização no campo para que delete caracteres indesejados.
        $senha = $_POST["senha"];
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT); // define uma criptografia para a senha.
        $dataNascimento = $_POST["data"];
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = preg_replace("/[^0-9]/", "", $cpf); // elimina caracteres que não foram definidos no primeiro parametro do metodo.
        $rg = filter_input(INPUT_POST, "rg", FILTER_SANITIZE_SPECIAL_CHARS);
        $rg = preg_replace("/[^0-9A-Za-z]/", "", $rg);

        $arquivo = "dados.txt";
        $linha = "$nome,$email,$senhaCriptografada,$dataNascimento,$cpf,$rg\n"; // cria uma variavel para armazenar os dados que serão inseridos no arquivo txt.

        $arquivoAberto = fopen($arquivo, "a");
        fwrite($arquivoAberto, $linha);

        fclose($arquivoAberto);

        echo "Dados enviados com sucesso!";
        header("Location: login.html"); // direciona o usuario para a pagina de login.
        exit;
    }
    if ($action === "login") { // verifica se o value da variavel action é login.
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = $_POST["senha"];

        $arquivo = "dados.txt";
        $usuarios = file($arquivo, FILE_IGNORE_NEW_LINES); // armazena o arquivo com dados do cadastro em uma variavel.
        $loginSucesso = false; // define uma variavel com valor false para controlar o estado de login do usuario inicial.

        $usuarios = file("dados.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // Lê o arquivo ignorando linhas vazias

        foreach ($usuarios as $usuario) { // itera sobre o arquivo de dados do usuario.
            // Divide a linha em campos usando a vírgula como delimitador
            $dados = explode(",", $usuario);
            
            // Verifica se todos os campos esperados estão presentes
            if (count($dados) === 6) {
                list($nomeSalvo, $emailSalvo, $senhaCriptografada, $dataNascimento, $cpf, $rg) = $dados; // metodo list cria uma lista de variaveis e a armazena na variavel dados.
                
                // Verifica as credenciais de login
                if ($email === $emailSalvo && password_verify($senha, $senhaCriptografada)) { //password... verifica se a senha corresponde a criptografia da senha.
                    $loginSucesso = true; // Login bem-sucedido
                    break; // Sai do loop, pois as credenciais foram verificadas
                }
            }
        }
        
        if ($loginSucesso) {
            header("Location: lista.php");
            exit;
        } else {
            echo "Email ou senha incorretos!";
        }
    }
}
?>