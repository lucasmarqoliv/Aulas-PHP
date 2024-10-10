<h3>13 - Escreva uma função que busca por uma palavra específica em um arquivo e retorna todas as linhas que a contêm.
</h3>
<?php
    $arquivo = "dados.csv";
    $arquivoAberto = fopen($arquivo, "r");
    $palavraProcurada = "o";  

    if ($arquivoAberto) {
        while (($linha = fgets($arquivoAberto)) !== false) {
            $posicao = strpos($linha, $palavraProcurada);
            if ($posicao !== false) {
                echo "Achou na linha: $linha<br>";
            }
        }
        fclose($arquivoAberto);
    } else {
        echo "Erro ao abrir o arquivo.";
    }
?>
