<?php
namespace App\design_pattern\Type;

use App\design_pattern\Type\PaiementType;
use App\design_pattern\Transaction\TransactionPaypal;


class PaypalType extends PaiementType {

    public function __construct() {
        parent::__construct([
            TransactionPaypal::class,
        ]);
    }

    public function getName(): string{
        return "Paypal";
    }

}