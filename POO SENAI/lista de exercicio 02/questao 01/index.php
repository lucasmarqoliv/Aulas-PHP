<?php

include('Produto.php');

$produto01 = new Produto('Tablet Sansung', 2000);

$produto01 -> setPreco(3000);
$produto01 -> getPreco();
