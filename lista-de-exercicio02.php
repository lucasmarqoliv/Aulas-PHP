<?php

    //1 - Contagem de 1 a 10: Crie um loop for que imprima os números de 1 a 10.
    for ($i = 1; $i <= 10; $i ++) {
        echo $i;
    }
    
?>
    <h1>Questão 02</h1>
<?php
    //2 - Tabuada do 5: Utilize um loop for para imprimir a tabuada do 5 (de 5x1 a 5x10).
    $numero = 5;
    for ($i = 1; $i <= 10; $i ++) {
        echo $numero * $i;
    }
?>
    <h1>Questão 03</h1>
<?php
    for ($i = 1; $i <= 100; $i ++) {
        echo $i. ' + ' .$i. ' = '. $i + $i;
    }
?>
    <h1>Questão 04</h1>
<?php
    for ($i = 1; $i <= 50; $i ++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }
?>
    <h1>Questão 05</h1>
<?php
    $nomes = array("Lucas", "Marques", "De", "Oliveira", "Ok");
    foreach ($nomes as $nome) {
        echo $nome;
    }
?>
    <h1>Questão 06</h1>
<?php
    $produtos = array('mesa' => 50, 'cadeira' => 100, 'computador' => 1000);
    foreach ($produtos as $chave => $produto) {
        echo  $chave. $produto;
    }
?>
    <h1>Questão 07</h1>
<?php
    $numeros = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $contador = 0;
    foreach ($numeros as $numero) {
        if ($numero > 5) {
            $contador ++;
        }
    }
    echo $contador;
?>
    <h1>Questão 08</h1>
<?php
    $frutas = array ('maçã', 'uva', 'goiaba', 'melancia', 'manga');
    $contador = 0;
    foreach ($frutas as $fruta) {
        $contador ++;
        echo $contador. $fruta;
    }
?>
    <h1>Questão 09</h1>
<?php
    $numeros = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $contador = 0;
    foreach ($numeros as $numero) {
        $contador ++;
        echo $numero. ' + ' .$contador. ' = ' .$numero + $contador;
    }
?>
    <h1>Questão 10</h1>
<?php
    $numero = 11;
    while ($numero > 1) {
        $numero --;
        echo $numero;
    }
?>
    <h1>Questão 11</h1>
<?php
    
?>