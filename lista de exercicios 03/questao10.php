<h3>10 - Escreva programa em php que lê o arquivo dados.csv e exibe os dados em uma tabela HTML.
</h3>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir CSV</title>
</head>
<body>
    <h1>Dados do CSV</h1>
    <div>
        <?php
        // Define o caminho para o arquivo CSV que você deseja abrir
        $arquivo = 'dados.csv';

        // Verifica se o arquivo pode ser aberto com sucesso para leitura
        if (($handle = fopen($arquivo, "r")) !== FALSE) {

            // Exibe o início de uma tabela HTML com uma borda ao redor das células
            echo '<table border="1">';

            // Loop que lê cada linha do arquivo CSV enquanto houver dados
            while (($dados = fgetcsv($handle, 1000, ",")) !== FALSE) {

                // Inicia uma nova linha na tabela HTML
                echo '<tr>';

                // Loop que percorre cada campo (cada célula) da linha lida do CSV
                foreach ($dados as $campo) {
                    // Exibe o valor do campo dentro de uma célula de tabela HTML (<td>),
                    // convertendo caracteres especiais em entidades HTML com htmlspecialchars
                    echo '<td>' . htmlspecialchars($campo) . '</td>';
                }

                // Fecha a linha da tabela
                echo '</tr>';
            }

            // Fecha a tabela HTML
            echo '</table>';

            // Fecha o arquivo CSV após a leitura
            fclose($handle);
        } else {
            // Se o arquivo CSV não puder ser aberto, exibe uma mensagem de erro
            echo 'Erro ao abrir o arquivo.';
        }
        ?>
    </div>
</body>
</html>
