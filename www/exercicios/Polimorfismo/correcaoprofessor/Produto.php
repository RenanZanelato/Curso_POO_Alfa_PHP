<?php

abstract class Produto
{
    private float $valor;
    
    protected function __construct(float $valor)
    {
      $this->valor = $valor;
    }

    public function precoProduto()
    {
       return $this->valor;
    }


}