<?php
namespace App\design_pattern\Transaction;


interface TransactionInterface {

    public function hasValidated():bool;
    
    public function getAmount():float;

    public function setAmount($amount):void;

    public function processPaiement();
}