<?php

class PagamentoCartao implements ITipoPagamento
{
    public function RetornaTipoPagamento()
    {
        return "Cartao";
    }

}