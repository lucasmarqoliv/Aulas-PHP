    <h1>Lista de Exercicios 2</h1>
    <h3>1 - Contagem de 1 a 10: Crie um loop for que imprima os números de 1 a 10.
</h3>
<?php
    for ($i = 1; $i <= 10; $i ++) {
        echo $i;
    }
?>
    <h3>2 - Tabuada do 5: Utilize um loop for para imprimir a tabuada do 5 (de 5x1 a 5x10).
</h3>
<?php
    $numero = 5;
    for ($i = 1; $i <= 10; $i ++) {
        echo $numero * $i;
    }
?>
    <h3>3 - Soma dos números de 1 a 100: Crie um loop for que some todos os números de 1 a 100 e imprima o resultado.
</h3>
<?php
    for ($i = 1; $i <= 100; $i ++) {
        echo $i. ' + ' .$i. ' = '. $i + $i;
    }
?>
    <h3>4 - Números pares de 1 a 50: Utilize um loop for para imprimir todos os números pares entre 1 e 50.
</h3>
<?php
    for ($i = 1; $i <= 50; $i ++) {
        if ($i % 2 == 0) {
            echo $i;
        }
    }
?>
    <h3>5 - Nomes em um array: Crie um array com 5 nomes e use foreach para imprimir cada nome.
</h3>
<?php
    $nomes = array("Lucas", "Marques", "De", "Oliveira", "Ok");
    foreach ($nomes as $nome) {
        echo $nome;
    }
?>
    <h3>6 - Valores de um array: Crie um array associativo com 3 produtos e seus preços. Utilize foreach para imprimir o nome de cada produto e seu preço.
</h3>
<?php
    $produtos = array('mesa' => 50, 'cadeira' => 100, 'computador' => 1000);
    foreach ($produtos as $chave => $produto) {
        echo  $chave. $produto;
    }
?>
    <h3>7 - Contagem de elementos: Dado um array com 10 números, use foreach para contar quantos números são maiores que 5.
</h3>
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
    <h3>8- Lista de frutas: Crie um array com diferentes frutas e use foreach para criar uma lista numerada.
</h3>
<?php
    $frutas = array ('maçã', 'uva', 'goiaba', 'melancia', 'manga');
    $contador = 0;
    foreach ($frutas as $fruta) {
        $contador ++;
        echo $contador. $fruta;
    }
?>
    <h3>9- Soma de elementos: Crie um array com 10 números e use foreach para calcular a soma de todos os elementos.
</h3>
<?php
    $numeros = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $contador = 0;
    foreach ($numeros as $numero) {
        $contador ++;
        echo $numero. ' + ' .$contador. ' = ' .$numero + $contador;
    }
?>
    <h3>10 - Contagem regressiva: Use um loop while para imprimir uma contagem regressiva de 10 a 1.
</h3>
<?php
    $numero = 11;
    while ($numero > 1) {
        $numero --;
        echo $numero;
    }
?>
    <h3>11 - Soma até um limite: Crie um loop while que some números inteiros até que a soma ultrapasse 100 e imprima quantos números foram somados.
</h3>
<?php
    $numero = 0;
    while ($numero <= 100) {
        $numero ++;
        echo $numero. '+' .$numero. '=' .($numero + $numero);
    }
    echo 'quantidade de numeros somados: '.$numero;
?>
    <h3>12 - Números ímpares: Utilize um loop while para imprimir os números ímpares de 1 a 25.
</h3>
<?php
    $numero = 0;
    while ($numero <= 25) {
        $numero ++;
        if ($numero % 2 != 0) {
            echo $numero;
        }
    }
?>