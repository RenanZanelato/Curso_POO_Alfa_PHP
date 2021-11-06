<?php

require_once('ITipoPagamento.php');
require_once('PagamentoCartao.php');
require_once('PagamentoCheque.php');
require_once('Pagamento.php');


$TipoPagamento = new PagamentoCartao();

$Pagamento = new Pagamento($TipoPagamento);

$tipoPagamento = $Pagamento->getTipoPagamento(); 
print_r($tipoPagamento);


$TipoPagamento = new PagamentoCheque();

$Pagamento = new Pagamento($TipoPagamento);

$tipoPagamento = $Pagamento->getTipoPagamento(); 
print_r($tipoPagamento);
