<?php

    namespace App\Payment;

    use App\Payment\Exception\InvalidPaymentMethodException;
    use App\Payment\Method\PaymentMethodInterface;

    readonly class PaymentMethodFactory
    {
        public function __construct(private array $paymentMethods) { }

        /**
         * @throws \App\Payment\Exception\InvalidPaymentMethodException
         */
        public function getPaymentMethod(string $type): PaymentMethodInterface
        {
            if (!isset($this->paymentMethods[$type])) {
                throw new InvalidPaymentMethodException("Méthode de paiement inconnue : $type");
            }

            return $this->paymentMethods[$type];
        }
    }