<?php

    namespace App\design_pattern\Exception;

    class InvalidTransactionException extends \Exception
    {
        public function __construct($message = "Transaction invalide"){
            parent::__construct($message);
        }
    }