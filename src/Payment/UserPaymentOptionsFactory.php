<?php

    namespace App\Payment;

    use App\Payment\Exception\InvalidPaymentOptionsException;
    use App\Payment\Exception\InvalidPaymentUserException;
    use App\Payment\Options\PaymentOptionsInterface;

    readonly class UserPaymentOptionsFactory
    {
        /**
         * @param array<UserPaymentOptions> $userPaymentOptions
         */
        public function __construct(
            private array $userPaymentOptions,
        ) {
        }

        /**
         * @throws \App\Payment\Exception\InvalidPaymentOptionsException
         * @throws \App\Payment\Exception\InvalidPaymentUserException
         */
        public function getPaymentOptions(User $user, string $type): ?PaymentOptionsInterface
        {
            foreach ($this->userPaymentOptions as $paymentOptions) {
                if ($paymentOptions->getUser()->getId() === $user->getId()) {
                    try {
                        return $paymentOptions->getPaymentOptions($type);

                    } catch (InvalidPaymentOptionsException $e) {
                        throw new InvalidPaymentOptionsException(
                            sprintf(
                                "Options de paiement '%s' inconnue pour l'utilisateur %s %s",
                                $type,
                                $paymentOptions->getUser()->getFirstname(),
                                $paymentOptions->getUser()->getLastname()
                            )
                        );
                    }
                }
            }

            throw new InvalidPaymentUserException(
                sprintf(
                    "Utilisateur inconnu '%s %s'",
                    $user->getFirstname(),
                    $user->getLastname()
                )
            );

        }

    }