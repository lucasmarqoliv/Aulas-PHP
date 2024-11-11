
<?php

include ('Livro.php');

$livro01 = new Livro('Clean Code', 'Robert Cecil Martin');

$livro01 -> setPreco(80);

echo 'O nome do livro é: '. $livro01 -> titulo. ', O Autor é: '.$livro01 -> autor.', E o preço é R$: '.$livro01 -> getPreco().'.';