<?php

    namespace App\Payment\Method;

    use App\Payment\Exception\InvalidPaymentOptionsException;
    use App\Payment\Options\CreditCardOptions;
    use App\Payment\Options\PaymentOptionsInterface;
    use InvalidArgumentException;

    class CreditCardPayment implements PaymentMethodInterface
    {
        /**
         * @throws \App\Payment\Exception\InvalidPaymentOptionsException
         */
        public function pay(float $amount, ?PaymentOptionsInterface $options = null): void
        {
            if (!$options instanceof CreditCardOptions) {
                throw new InvalidPaymentOptionsException("Les options de paiement ne sont pas valides pour ce mode de paiement.");
            }

            $cardNumber = $options->getNumber();
            $expirationDate = $options->getExpirationDate();
            $cvv = $options->getCvv();

            if (!$cardNumber || !$expirationDate || !$cvv) {
                throw new InvalidArgumentException("Informations de carte bancaire incomplètes.");
            }

            echo sprintf(
                "Paiement de %s € par Carte Bancaire avec le numéro %s.<br/><br/>",
                $amount,
                $cardNumber
            );
        }
    }