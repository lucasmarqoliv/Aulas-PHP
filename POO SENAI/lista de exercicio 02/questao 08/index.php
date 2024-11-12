
<?php

include('Cachorro.php');

$cachorro01 = new Cachorro('Tótó');

$cachorro01->setIdade(7);

echo $cachorro01->latir();

