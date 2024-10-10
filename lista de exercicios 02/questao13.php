<?php
    $senhaDefinida = '5';
    $senhaDigitada = $_POST["senha"];
    while ($senhaDigitada !== $senhaDefinida) {
        echo 'Senha incorreta!';
    }
    if ($senhaDigitada == $senhaDefinida) {
        echo 'Senha correta!';
    }
?>