<h3>6- Escreva uma função que verifica se um arquivo existe e retorna uma mensagem apropriada.
</h3>
<?php
    $arquivo = "exemplo.txt";
    function verificaArquivo($arquivo) {
        if (file_exists("$arquivo")) {
            echo "existe";
        }
        else {
            echo "não existe.";
        }
    }
    verificaArquivo("exemplo.txt");
?>