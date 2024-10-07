
<?php
    $nome = $_POST["nome"];
    $fp = fopen("arquivo.txt", "r+");
    echo "<pre>";
        fwrite($fp, "$nome");
    fclose($fp);
?>