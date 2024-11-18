<?php
namespace App\design_pattern\Transaction;

use App\design_pattern\Transaction\TransactionInterface;


class TransactionVirementBancaire implements TransactionInterface {


    private $IBAN;
    private float $amount;
    private bool $hasValidated = false;

    public function __construct($amount){
        $this->amount = $amount;
    }

    public function hasValidated():bool{
        return $this->hasValidated;
    }

    public function getAmount():float {
        return $this->amount;
    }

    public function setAmount($amount):void{
    
    }

    public function processPaiement(){

    }


    /**
     * Get the value of IBAN
     */ 
    public function getIBAN()
    {
        return $this->IBAN;
    }

    /**
     * Set the value of IBAN
     *
     * @return  self
     */ 
    public function setIBAN($IBAN)
    {
        $this->IBAN = $IBAN;

        return $this;
    }
}