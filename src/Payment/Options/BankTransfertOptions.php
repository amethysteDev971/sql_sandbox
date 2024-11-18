<?php

    namespace App\Payment\Options;

    readonly class BankTransfertOptions implements PaymentOptionsInterface
    {
        public function __construct(
            private string $iban,
            private string $bic
        ) { }

        public function getIban(): string
        {
            return $this->iban;
        }

        public function getBic(): string
        {
            return $this->bic;
        }
    }