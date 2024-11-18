<?php
namespace App\design_pattern\Type;

use App\design_pattern\Transaction\TransactionCB;

class CarteBancaireType extends PaiementType{

    public function __construct() {
        parent::__construct([
            TransactionCB::class,
        ]);
    }

    public function getName(): string{
        return "Carte Bancaire";
    }
}