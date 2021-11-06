<?php

class Pagamento
{
    /*
    private PagamentoCartao $tipoPagamento;

    public function __construct(PagamentoCartao $tipoPagamento)
    {
       $this->tipoPagamento = $tipoPagamento;
    }
    */

    private ITipoPagamento $tipoPagamento;

    public function __construct(ITipoPagamento $tipoPagamento)
    {
       $this->tipoPagamento = $tipoPagamento;
    }

    public function getTipoPagamento()
    {
        return $this->tipoPagamento->RetornaTipoPagamento();
    }
}