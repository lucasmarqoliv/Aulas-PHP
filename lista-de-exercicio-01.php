
<?php
// 1 - Crie uma variável chamada $nome e atribua a ela seu nome. Em seguida, imprima uma mensagem no formato "Olá, [seu nome]!".
    $nome = 'Lucas Marques';
    echo 'Olá, ' ,$nome ,'!';

// 2 - Declare duas variáveis $a e $b, atribua a elas números inteiros. Calcule e imprima a soma, subtração, multiplicação e divisão. Verificação de Par ou Ímpar
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

// 3 - Crie uma variável $numero e atribua a ela um valor inteiro. Use if-else para verificar se o número é par ou ímpar e imprima uma mensagem correspondente.
    $numero = 20;
    if ($numero % 2 == 0) {
        echo $numero, 'é par!';
    }
    else {
        echo $numero, 'é impar!';
    }

// 4 - Crie uma função chamada calculadora que recebe três parâmetros: dois números e um operador (+, -, *, /). Use if-else para realizar a operação correspondente e retornar o resultado.
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

// 6 - Crie duas variáveis $num1 e $num2. Use uma estrutura if-else para determinar qual dos dois números é o maior e imprima o resultado.
    $num1 = 25;
    $num2 = 35;
    if ($num1 > $num2) {
        echo $num1, 'é maior!';
    }
    else {
        echo $num2, 'é maior!';
    }

//7 - Crie três variáveis $nota1, $nota2, $nota3 com valores entre 0 e 10. Calcule a média e imprima se o aluno foi aprovado (média >= 7) ou reprovado.
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

//8 - Crie uma variável $idade. Use if-else para verificar se a pessoa é menor de idade (menos de 18 anos) ou maior de idade e imprima uma mensagem.
    $idade = 17;
    if ($idade >= 18) {
        echo 'Maior de idade!';
    }
    else {
        echo 'Menor de idade!';
    }

//9 - Crie uma variável $valorCompra e atribua a ela um valor. Se o valor for maior que 100, aplique um desconto de 10% e imprima o valor final. Caso contrário, imprima o valor original. Número Positivo ou Negativo
    $valorCompra = 100;
    if ($valorCompra > 100) {
        $desconto = ($valorCompra * 10)/100;
        $valorCompra = $valorCompra - $desconto;
        echo $valorCompra;
    }
    else {
        echo $valorCompra;
    }

//10 - Crie uma variável $numero. Use if-else para verificar se o número é positivo, negativo ou zero e imprima a mensagem apropriada.
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

//11 - Crie uma variável $nota. Use if-else para classificar a nota em "A", "B", "C", "D" ou "F" com base na seguinte escala: A (9-10), B (7-8.9), C (5-6.9), D (3-4.9), F (0-2.9).
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

//12 - Crie uma variável $temperatura e atribua a ela um valor em Celsius. Use if-else para converter a temperatura para Fahrenheit e imprima o resultado.
    function conversorTemperatura($temperatura, $escala) {
        if ($escala == 'Celsius' || $escala == 'C') {
            $temperatura = ($temperatura * 1.8) + 32;
            echo "A temperatura em Fahrenheit é: " . $temperatura;
        } elseif ($escala == 'Fahrenheit' || $escala == 'F') {
            $temperatura = ($temperatura - 32) / 1.8;
            echo "A temperatura em Celsius é: " . $temperatura;
        } else {
            echo 'Por favor, digite a escala correta (Celsius ou Fahrenheit).';
        }
    }
    
    conversorTemperatura(30, 'Celsius');
    
    
//13 - Crie três variáveis $lado1, $lado2 e $lado3. Use if-else para verificar se os lados formam um triângulo e imprima uma mensagem correspondente.
    $lado1 = 5;
    $lado2 = 9;
    $lado3 = 10;
    if ($lado1 < ($lado2 + $lado3) and $lado2 < ($lado1 + $lado3) and $lado3 < ($lado1 + $lado2)) {
        echo 'os lados formam um triangulo.';
    } 
    else {
        echo 'os lados não foram um triangulo.';
    }

//14 - Crie uma variável $media e atribua a ela uma média de notas. Use if-else para verificar se o aluno está em risco (média < 5) e imprima uma mensagem apropriada.
    $media = 7;
    if ($media < 5) {
        echo 'o aluno está em risco!';
    }
    else {
        echo 'o aluno não está em risco.';
    }

//15 - Crie uma variável $dia com um número de 1 a 7. Use if-else para imprimir o dia da semana correspondente (1 - Domingo, 2 - Segunda, etc.).
    $dia = 0;
    if ($dia == 1) {
        echo 'Domingo';
    }
    elseif ($dia == 2) {
        echo 'Segunda';
    }
    elseif ($dia == 3) {
        echo 'Terca-feira';
    }
    elseif ($dia == 4) {
        echo 'Quarta-feira';
    }
    elseif ($dia == 5) {
        echo 'Quinta-feira';
    }
    elseif ($dia == 6) {
        echo 'Sexta-feira';
    }
    elseif ($dia == 7) {
        echo 'Sábado';
    }
    else {
        echo 'algo errado no dia informado';
    }
?>