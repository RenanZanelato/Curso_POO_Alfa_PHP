<?php

require_once('IAnimal.php');
require_once('Cachorro.php');
require_once('Galinha.php');
require_once('Habitat.php');

$Cachorro = new Cachorro();

$Galinha = new Galinha();

$Habitat = new Habitat($Cachorro);

print_r($Habitat->retornaSomDoAnimal());



$Habitat = new Habitat($Galinha);

print_r($Habitat->retornaSomDoAnimal());
