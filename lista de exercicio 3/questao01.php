<h3>1 - Escreva programa em php PHP que cria um arquivo chamado exemplo.txt e escreve "Olá, Mundo!" dentro dele.
</h3> 
<?php
$arquivo = "exemplo.txt";

$arquivoAberto = fopen($arquivo, "a");

$mensagem = "Olá, Mundo! \r\n";

fwrite($arquivoAberto, $mensagem);

fclose($arquivoAberto);
?>