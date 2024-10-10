<h3>7 - Crie programa em php que copia exemplo.txt para um novo arquivo chamado exemplo_copia.txt.
</h3>
<?php
    $novoArquivo = "exemplo_copia.txt";
    copy ("exemplo.txt", $novoArquivo);
?>