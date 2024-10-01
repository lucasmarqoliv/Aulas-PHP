
<?php
// primeira questão:
    $nome = 'Lucas Marques';
    echo 'Olá, ' ,$nome ,'!';

// segunda questão:
    $a = 10;
    $b = 15;
    $soma = $a + $b;
    echo 'Resultado da soma: ',$soma,'.';
    $subtracao = $a - $b;
    echo 'Resultado da subtração: ',$subtracao,'.';
    $multiplicacao = $a * $b;
    echo 'Resultado da multiplicação: ',$multiplicacao,'.';
    $divisao = $a / $b;
    echo 'Resultado da divisão: ',$divisao,'.';
    if ($a % 2 == 0) {
        echo $a, 'é par!';
    }
    if ($b % 2 != 0 ) {
        echo $b, 'é impar!';
    }

    // terceira questão:
    $numero = 20;
    if ($numero % 2 == 0) {
        echo $numero, 'é par!';
    }
    else {
        echo $numero, 'é impar!';
    }

    // quarta questão:
    function calculadora($numero1, $numero2, $operador) {
        if ($operador == '+') {
            echo $numero1 + $numero2;
        }
        elseif ($operador == '-') {
            echo $numero1 - $numero2;
        }
        elseif ($operador == '*') {
            echo $numero1 * $numero2;
        }
        elseif ($operador == '/') {
            echo $numero1 / $numero2;
        }
    }
    calculadora(10, 5, '/');

    // quinta questão
    $num1 = 25;
    $num2 = 35;
    if ($num1 > $num2) {
        echo $num1, 'é maior!';
    }
    else {
        echo $num2, 'é maior!';
    }

    //setima questão:
    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 3;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media >= 7 ) {
        echo 'Aprovado';
    }
    else {
        echo 'Reprovado!';
    }

    //oitava questão:
    $idade = 17;
    if ($idade >= 18) {
        echo 'Maior de idade!';
    }
    else {
        echo 'Menor de idade!';
    }

    //nona questão:
    $valorCompra = 100;
    if ($valorCompra > 100) {
        $desconto = ($valorCompra * 10)/100;
        $valorCompra = $valorCompra - $desconto;
        echo $valorCompra;
    }
    else {
        echo $valorCompra;
    }

    //decima questão:
    $n = 0;
    if ($n > 0) {
        echo $n, 'é positivo!';
    }
    elseif ($n < 0) {
        echo $n, 'é negativo!';
    }
    elseif ($n == 0){
        echo 'O numero é zero!';
    }

    //decima primeira questão:
    $nota = 2.9;
    if ($nota >= 9 and $nota <= 10) {
        echo 'A';
    }
    elseif ($nota >= 7 and $nota == 8.9) {
        echo 'B';
    }
    elseif ($nota >= 5 and $nota == 6.9) {
        echo 'C';
    }
    elseif ($nota >= 3 and $nota == 4.9) {
        echo 'D';
    }
    elseif ($nota == 0 or $nota == 2.9) {
        echo 'F';
    }
    
?>