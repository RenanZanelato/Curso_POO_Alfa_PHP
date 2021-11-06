<?php

class Tv extends Produto
{
    public function __construct()
    {
        parent::__construct(100);
    }

    public function precoProduto()
    {
       return parent::precoProduto() + (parent::precoProduto() * 0.1);
    }
}