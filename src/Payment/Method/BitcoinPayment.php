<?php

    namespace App\Payment\Method;

    use App\Payment\Exception\InvalidPaymentOptionsException;
    use App\Payment\Options\BitcoinOptions;
    use App\Payment\Options\PaymentOptionsInterface;
    use InvalidArgumentException;

    class BitcoinPayment implements PaymentMethodInterface
    {
        /**
         * @throws \App\Payment\Exception\InvalidPaymentOptionsException
         */
        public function pay(float $amount, ?PaymentOptionsInterface $options = null): void
        {
            if (!$options instanceof BitcoinOptions) {
                throw new InvalidPaymentOptionsException("Les options de paiement ne sont pas valides pour ce mode de paiement.");
            }

            if (!$options->getAddress()) {
                throw new InvalidArgumentException("Adresse de portefeuille Bitcoin requise.");
            }

            echo sprintf(
                "Paiement de %s € en Bitcoin à l'adresse %s.<br/><br/>",
                $amount,
                $options->getAddress()
            );
        }
    }