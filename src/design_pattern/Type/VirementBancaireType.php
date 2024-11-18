<?php
namespace App\design_pattern\Type;

use App\design_pattern\Transaction\TransactionVirementBancaire;

class VirementBancaireType extends PaiementType {

    public function __construct() {
        parent::__construct([
            TransactionVirementBancaire::class,
        ]);
    }

    public function getName(): string{
        return "Virement Bancaire";
    }


}