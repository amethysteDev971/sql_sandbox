<?php
namespace App\design_pattern\Bank;

use App\design_pattern\Exception\InvalidTransactionException;
use App\design_pattern\Paiement;
use App\design_pattern\Type\PaiementType;
class Bank{
    /**
     * Montant du compte bancaire
     * @var float
     */
    private float $amountAccount;
    private bool $isSuccefull = false;

    public function __construct($amountAccount){
        $this->amountAccount = $amountAccount;
    }

    public function isSuccefull():bool{
        return $this->isSuccefull;
    }

    

    /**
     * Get montant du compte bancaire
     *
     * @return  float
     */ 
    public function getAmountAccount()
    {
        return $this->amountAccount;
    }

    /**
     * Set montant du compte bancaire
     *
     * @param  float  $amountAccount  Montant du compte bancaire
     *
     * @return  self
     */ 
    public function setAmountAccount(float $amountAccount)
    {
        $this->amountAccount = $amountAccount;

        return $this;
    }

    public function randomProcessPaiement(Paiement $paiementType):bool{
        $randomNum = rand(0,1);

        if ($randomNum == 0){
            $this->isSuccefull = false;
            $this->refusTransaction($paiementType);
            return $this->isSuccefull;
        }

        $this->isSuccefull = true;
        $this->succefullTransaction($paiementType);
        return $this->isSuccefull ;
    }

    private function refusTransaction(Paiement $paiementType):void{
        $paiementType->getPaiement()->getChoosedTransaction()->hasValidated(false);
    }

    private function succefullTransaction(Paiement $paiementType):void{
        $paiementType->getPaiement()->getChoosedTransaction()->hasValidated(true);
        throw new InvalidTransactionException();
        
    }
}