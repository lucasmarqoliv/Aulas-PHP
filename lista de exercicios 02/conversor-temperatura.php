<?php
    $temperatura = $_POST['temperatura'];
    $escala = $_POST['escala'];
    if ($escala == 'C') {
        $temperatura = ($temperatura - 32) / 1.8;
        echo 'A Temperatura em Celsius é: ' .$temperatura. 'ºC';
    }
    elseif ($escala == 'F') {
        $temperatura = ($temperatura * 1.8) + 32;
        echo 'A temperatura em Fahrenheit é: ' .$temperatura. 'ºF';
    }
    else {
        echo 'Digite a temperatura correta!';
    }
?>