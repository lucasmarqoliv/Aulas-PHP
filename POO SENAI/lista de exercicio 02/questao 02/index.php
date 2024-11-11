
<?php

include ('Carro.php');

$carro01 = new Carro ('Honda', 'Civic');

echo $carro01 -> setAno(1883); // retorna Valor do ano inferior a 1885

