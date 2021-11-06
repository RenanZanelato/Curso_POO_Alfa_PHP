<?php

require_once('TipoPagamento.php');
require_once('Pagamento.php');
require_once('Receber.php');

$TipoPagamento = new TipoPagamento();
$TipoPagamento->tipo = "cartao";

$Pagamento = new Pagamento($TipoPagamento);
$Receber = new Receber($TipoPagamento);

$tipoPagamento = $Pagamento->getTipoPagamento(); 
print_r($tipoPagamento);

$tipoPagamento = $Receber->getTipoPagamento(); 
print_r($tipoPagamento);