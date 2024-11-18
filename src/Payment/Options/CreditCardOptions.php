<?php

    namespace App\Payment\Options;

    readonly class CreditCardOptions implements PaymentOptionsInterface
    {
        public function __construct(
            private string $number,
            private string $expirationDate,
            private string $cvv
        ) {}

        public function getNumber(): string
        {
            return $this->number;
        }

        public function getExpirationDate(): string
        {
            return $this->expirationDate;
        }

        public function getCvv(): string
        {
            return $this->cvv;
        }
    }