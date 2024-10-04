<?php
    $temperatura = $_POST['temperatura'];
    $escala = $_POST['escala'];
    if ($escala == 'C') {
        $temperatura = ($temperatura - 32) * 5.9;
        echo 'A Temperatura em Celsius é: ' .$temperatura;
    }
    elseif ($escala == 'F') {
        $temperatura = ($temperatura * 1.8) + 32;
        echo 'A temperatura em Fahrenheit é: ' .$temperatura;
    }
    else {
        echo 'Digite a temperatura correta!';
    }
?>