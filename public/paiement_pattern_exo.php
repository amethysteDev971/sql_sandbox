<?php

use App\design_pattern\Paiement;
use App\design_pattern\Type\CarteBancaireType;
use App\design_pattern\Type\PaypalType;
use App\design_pattern\Type\VirementBancaireType;
use App\design_pattern\Transaction\TransactionCB;
use App\design_pattern\Bank\Bank;
use App\design_pattern\Exception\InvalidTransactionException    ;
require __DIR__ . '/../vendor/autoload.php';

$cb = new CarteBancaireType() ;
$paypal = new PaypalType();
$virement = new VirementBancaireType();


// * Test paiement
$paiement1 = new Paiement(50);
$paiement1->setTypePaiement(new CarteBancaireType());
$paiement1->setTypePaiement(new PaypalType());
$paiement1->setTypePaiement(new VirementBancaireType());

$paiement1->getComboBox();

//Afficher les différents Types de paiements Dispo
// function displayModePaiement(Paiement $paiementSysthem){
//     // $paiement = $paiementSysthem;

//     foreach ($paiementSysthem->getTypePaiement() as $key => $value) {   
//         echo '<br>'. $key .'<br>';
//         // echo '<pre>';
//         foreach ($value as $key_ => $val) {
//             // var_dump( $val );
//             // echo '$key_ = '.$key_;
//             echo $val->getName() .'<br>';
//         }
//         // var_dump( $value );
//         // echo '</pre>';
//     }
// }

//setter le paiement choisi
$paiement1->setPaiementMethode(0);

//On peut maintenant effectuer le paiement
// On fait la transaction

$paiement1->settingTransaction();

//Remplir les informations de paiement
$transaction = $paiement1->getPaiement()->getChoosedTransaction();


$transaction->setInfoCB("Jhon Doe", new DateTime(),"123");
// echo '<pre>';
// var_dump( $transaction);
// echo '</pre>';


//Validation_Paiement
$bank = new Bank(100);
demandePaiement($bank,$paiement1);

function ramdomProcess(Bank $bank, Paiement $paiement){
    try {
        if ($bank->randomProcessPaiement($paiement)) {
            echo "<br>Transaction refusée<br>";
        }else{
            echo "<br><span style='color:green;'>Transaction acceptée</span><br>";
        }
    } catch (InvalidTransactionException $e) {
        echo "<br><span style='color:red;'>".$e->getMessage()."</span><br>";
    }
    
    
}

function demandePaiement(Bank $bank, Paiement $paiement){
  
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
        ramdomProcess($bank,$paiement);
   
    
    
    echo'<hr><br>';
}

$paiement2 = new Paiement(100);


$paiement2->setTypePaiement($cb);
$paiement2->setTypePaiement($paypal);
$paiement2->setTypePaiement($virement);

// echo '<pre>';
// var_dump( $paiement2->getComboBox() );
// echo '</pre>';

$paiement2->getComboBox();
$paiement2->setPaiementMethode(1);
$paiement2->settingTransaction();
$transaction2 = $paiement2->getPaiement()->getChoosedTransaction();
$transaction2->setEmail("amethyste.design@gmail.com");
// echo '<pre>';
// var_dump( $transaction2);
// echo '</pre>';
$bank->setAmountAccount(200);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
ramdomProcess($bank,$paiement2);
echo'<hr><br>';

$paiement3 = new Paiement(300);

$paiement3->setTypePaiement($cb);
$paiement3->setTypePaiement($paypal);
$paiement3->setTypePaiement($virement);
$paiement3->getComboBox();
$paiement3->setPaiementMethode(2);
$paiement3->settingTransaction();
$transaction3 = $paiement3->getPaiement()->getChoosedTransaction();
$transaction3->setIBAN("FRttyoh4564648dsdsfsd");
$bank->setAmountAccount(500);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
ramdomProcess($bank,$paiement3);
echo'<hr><br>';