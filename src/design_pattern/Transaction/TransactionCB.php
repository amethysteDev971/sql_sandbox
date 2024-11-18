<?php
namespace App\design_pattern\Transaction;

class TransactionCB implements TransactionInterface{

    private $name;
    private $date;
    private $cvv;

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

    public function getInfoCB(): array{
        return [
            "name"=> $this->name,
            "date"=> $this->date,
            "CVV"=> $this->cvv
        ];
    }

    public function setInfoCB($name, $date, $cvv): void{
        $this->name = $name;
        $this->date = $date;
        $this->cvv = $cvv;
    }
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }
}