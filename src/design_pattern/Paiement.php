<?php
namespace App\design_pattern;

use App\design_pattern\Transaction\TransactionInterface;
use App\design_pattern\Type\CarteBancaireType;
use App\design_pattern\Type\PaiementType;

class Paiement{

    protected float $amount = 0;
    protected PaiementType $paiement;
    protected array $comboBox = [];

    protected $transaction;

    /**
     * 
     * 
     * @var array<PaiementType>
     */
    private array $typePaiement = [];


    public function __construct(float $amount){
        $this->amount = $amount;
    }

    /**
     * Get the value of typePaiement
     */ 
    public function getTypePaiement()
    {
        return $this->typePaiement;
    }

    /**
     * Set the value of typePaiement
     *
     * 
     */ 
    public function setTypePaiement(PaiementType $paiementType):void  
    {
        $this->typePaiement[] = [$paiementType];
       

        // return $this->typePaiement;
    }

    /**
     * Get the value of paiement
     */ 
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set the value of paiement
     *
     * @return  self
     */ 
    public function setPaiementMethode(int $index):void
    {
        for ($i=0; $i < count($this->comboBox); $i++) { 
            // echo '<pre>';
            // var_dump($this->comboBox[$i]);
            // echo '</pre>';
            if ($i === $index) {
               echo "Methode de paiement choisie:";
                foreach ($this->comboBox[$i] as $key => $value) {
                    // echo "<br>".$key ."<br>";
                    // echo '<pre>';
                    // var_dump($value);
                    // echo '</pre>';
                //     // 
                    switch ($key) {
                        case 'Carte Bancaire':
                            
                            $this->paiement = $value;
                            echo '<h1>Carte Bancaire</h1>';
                            echo 'Montant de la transaction => '.$this->amount.'€';
                            break;
                        case 'Paypal':
                            echo '<h1>PayPal</h1>';
                            echo 'Montant de la transaction => '.$this->amount.'€';
                            $this->paiement = $value;

                            break;
                        case 'Virement Bancaire':
                            echo '<h1>Virement Bancaire</h1>';
                            echo 'Montant de la transaction => '.$this->amount.'€';
                            $this->paiement = $value;

                            break;           
                        default:
                            # code...
                            break;
                    }
                }
               
            }
            
        }
        

    }

    /**
     * Get the value of comboBox
     */ 
    public function getComboBox()
    {   
        foreach ($this->typePaiement as $key => $value) { 
            // echo'<h3>ComboBox</h3>';  
            // echo '<br>'. $key .'<br>';
            // echo '<pre>';
            foreach ($value as $key_ => $val) {
                // echo '<pre>';
                // var_dump( $val );
                // echo '</pre>';
                // echo '$key_ = '.$key_;
                // echo $val->getName() .'<br>';
                $this->comboBox[] = ['id'=>(string)$key,$val->getName()=>$val];
            }
            // var_dump( $value );
            // echo '</pre>';
        }

        return $this->comboBox;
    }

    /**
     * Set the value of comboBox
     *
     * @return  self
     */ 
    public function setComboBox($comboBox)
    {
        $this->comboBox = $comboBox;

        return $this;
    }

    /**
     * Get the value of transaction
     */ 
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Set the value of transaction
     *
     * @return  self
     */ 
    public function setTransaction( $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function settingTransaction():void{
        //Configurer la bonne transaction
        echo "<br>function settingTransaction()...<br>";
        $modePaiement = $this->paiement;
        // echo '<pre>';
        // var_dump( $modePaiement);
        // echo '</pre>';
        
        $array = $modePaiement->getPaiements();
        for ($i=0; $i < count($array); $i++) { 
            // echo '<pre>';
            // var_dump( $array[$i] );
            // echo '</pre>';
            $modePaiement->setChoosedTransaction(new $array[$i]($this->amount));
            // $object = new $nomDeVarDumpé();
            // $object = new $array[$i]();
        }

    }
}