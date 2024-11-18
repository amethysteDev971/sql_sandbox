<?php

    namespace App\Payment;

    use App\Payment\Exception\InvalidPaymentOptionsException;
    use App\Payment\Options\PaymentOptionsInterface;

    class UserPaymentOptions
    {
        private User $user;

        /**
         * @var array<string, PaymentOptionsInterface>
         */
        private array $paymentOptions;

        /**
         * @throws \App\Payment\Exception\InvalidPaymentOptionsException
         */
        public function __construct(
            User $user,
            array $paymentOptions = []
        ) {
            $this->user = $user;
            foreach ($paymentOptions as $type => $paymentOption) {
                $this->addPaymentOptions($type, $paymentOption);
            }
            $this->paymentOptions = $paymentOptions;
        }

        public function getUser(): User
        {
            return $this->user;
        }

        /**
         * @throws \App\Payment\Exception\InvalidPaymentOptionsException
         */
        public function addPaymentOptions(string $type, PaymentOptionsInterface $paymentOptions): void
        {
            if (isset($this->paymentOptions[$type])) {
                throw new InvalidPaymentOptionsException(
                    sprintf(
                        "Options de paiement déjà définies pour le type '%s' pour l'utilisateur %s %s",
                        $type,
                        $this->user->getFirstname(),
                        $this->user->getLastname()
                    )
                );
            }

            $this->paymentOptions[$type] = $paymentOptions;
        }

        /**
         * @throws \App\Payment\Exception\InvalidPaymentOptionsException
         */
        public function getPaymentOptions(string $type): PaymentOptionsInterface
        {
            if (!isset($this->paymentOptions[$type])) {
                throw new InvalidPaymentOptionsException("Options de paiement inconnue : $type");
            }

            return $this->paymentOptions[$type];
        }
    }