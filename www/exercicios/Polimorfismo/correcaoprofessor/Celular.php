<?php

class Celular extends Produto
{
    public function __construct()
    {
        parent::__construct(100);
    }

    public function precoProduto()
    {
       return 500;
    }
}