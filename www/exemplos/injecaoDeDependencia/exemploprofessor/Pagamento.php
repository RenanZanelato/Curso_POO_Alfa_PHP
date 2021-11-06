<?php

class Pagamento
{
    private TipoPagamento $tipoPagamento;

    /*
    public function __construct()
    {
       $this->tipoPagamento = new TipoPagamento();
       $this->tipoPagamento->tipo = 'cartao';
    }
    */

    public function __construct(TipoPagamento $tipoPagamento)
    {
       $this->tipoPagamento = $tipoPagamento;
    }

    public function getTipoPagamento()
    {
        return $this->tipoPagamento->tipo;
    }
}