<?php
    $temperatura = $_POST['temperatura'];
    $escala = $_POST['escala'];
    if ($escala == 'F') {
        $temperatura = ($temperatura * 1.8) + 32;
        echo 'A Temperatura em Fahrenheit é: ' .$temperatura;
    }
    elseif ($escala == 'C') {
        $temperatura = ($temperatura - 32) * 5.9;
        echo 'A temperatura em Celsius é: ' .$temperatura;
    }
    else {
        echo 'Digite a temperatura correta!';
    }
?>