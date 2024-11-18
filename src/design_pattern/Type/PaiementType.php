<?php
namespace App\design_pattern\Type;

use App\design_pattern\Transaction\TransactionInterface;

abstract class PaiementType{
    private array $paiements = [];
    // private TransactionInterface $choosedTransaction;
    private $choosedTransaction;
    
    public function __construct(array $paiements) {
        $this->paiements = [
            ...$paiements
        ] ;
    }
    abstract public function getName(): string;

    /**
     * Get the value of paiements
     */ 
    public function getPaiements()
    {
        return $this->paiements;
    }


    /**
     * Get the value of choosedTransaction
     */ 
    public function getChoosedTransaction()
    {
        return $this->choosedTransaction;
    }

    /**
     * Set the value of choosedTransaction
     *
     * @return  self
     */ 
    public function setChoosedTransaction($choosedTransaction)
    {
        $this->choosedTransaction = $choosedTransaction;

        return $this;
    }
}