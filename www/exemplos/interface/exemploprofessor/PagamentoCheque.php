<?php

class PagamentoCheque implements ITipoPagamento
{
    public function RetornaTipoPagamento()
    {
        return "Cheque";
    }
}