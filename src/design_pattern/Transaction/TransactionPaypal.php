<?php
namespace App\design_pattern\Transaction;

use App\design_pattern\Transaction\TransactionInterface;


class TransactionPaypal implements TransactionInterface{

    private $email;

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
        $this->amount = $amount;
    }

    public function processPaiement(){

    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

    
