<?php

    namespace App\Payment\Options;

    readonly class PaypalOptions implements PaymentOptionsInterface
    {
        public function __construct(
            private string $email,
            private string $password
        ) { }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function getPassword(): string
        {
            return $this->password;
        }
    }