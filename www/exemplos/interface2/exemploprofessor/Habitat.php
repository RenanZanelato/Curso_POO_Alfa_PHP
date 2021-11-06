<?php

class Habitat
{
    private IAnimal $animal;

    public function __construct(IAnimal $animal)
    {
       $this->animal = $animal;
    }

    public function retornaSomDoAnimal()
    {
      return $this->animal->som();
    }
}