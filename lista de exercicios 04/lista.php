<style>
        #titulo {
            text-align: center;
        }
        #tabela {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 100px;
        }
</style>

<?php
// Lê os dados do arquivo
$arquivo = "dados.txt";
$usuarios = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<h1 id='titulo'>Lista de Usuários</h1>";
echo "<table border='1' id='tabela'>";
echo "<tr><th>Nome</th><th>Email</th><th>Data de Nascimento</th><th>CPF</th><th>RG</th></tr>";

foreach ($usuarios as $usuario) {
    $dados = explode(",", $usuario);

    // Verifica se todos os campos esperados estão presentes
    if (count($dados) === 6) {
        list($nome, $email, $senha, $dataNascimento, $cpf, $rg) = $dados;
        
        // Exibe os dados do usuário na tabela
        echo "<tr>";
        echo "<td>" . htmlspecialchars($nome) . "</td>";
        echo "<td>" . htmlspecialchars($email) . "</td>";
        echo "<td>" . htmlspecialchars($dataNascimento) . "</td>";
        echo "<td>" . htmlspecialchars($cpf) . "</td>";
        echo "<td>" . htmlspecialchars($rg) . "</td>";
        echo "</tr>";
    } else {
        // Opcional: Exibir uma mensagem de erro para desenvolvedores para diagnosticar o problema
        echo "Dados incompletos na linha: $usuario<br>";
    }
}
echo "</table>";
?>
