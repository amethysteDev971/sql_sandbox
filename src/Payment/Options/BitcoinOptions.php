<?php

    namespace App\Payment\Options;

    readonly class BitcoinOptions implements PaymentOptionsInterface
    {
        public function __construct(
            private string $address
        ) { }

        public function getAddress(): string
        {
            return $this->address;
        }
    }