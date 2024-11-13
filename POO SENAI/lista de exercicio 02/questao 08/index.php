
<?php

include('Cachorro.php');

$cachorro01 = new Cachorro('Tótó');

$cachorro01->setIdade(7);

echo Cachorro::latir(); // setamento da classe sem instancia-lo.
