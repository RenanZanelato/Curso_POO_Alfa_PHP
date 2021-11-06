<?php

require_once('Produto.php');
require_once('Celular.php');
require_once('Computador.php');
require_once('Tv.php');

$tv = new Tv();
$celular = new Celular();
$computador = new Computador();

echo $tv->precoProduto();
echo '<br>';
echo $celular->precoProduto();
echo '<br>';
echo $computador->precoProduto();
echo '<br>';