<?php

class Receber
{
    private TipoPagamento $tipoPagamento;

    public function __construct(TipoPagamento $tipoPagamento)
    {
       $this->tipoPagamento = $tipoPagamento;
    }

    public function getTipoPagamento()
    {
        return $this->tipoPagamento->tipo;
    }

}