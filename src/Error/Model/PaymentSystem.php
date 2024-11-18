<?php
namespace App\Error\Model;

use App\Error\Exception\PaymentDeclinedException;
/**
 * simule un paiement
 */
class PaymentSystem{
   // - Méthode `processPayment(float $amount)` : simule un paiement.
    //      - Si `$amount` est supérieur à 1000, lance une `PaymentDeclinedException` (comme si la carte avait un plafond).
    //      - Sinon, le paiement est accepté.

    public function processPayment(float $amount) : void {

        if ($amount > 1000) {
            throw new PaymentDeclinedException("Paiement décliné (La carte a un plafond)");  
        }

    }

    //TODO #### 3. Créer la Fonction `processPurchase`

}