<?php

    // require_once 'Reservation.php';
    namespace App\reservation_Marc;

    use DateTime;

    class ReservationManager
    {

        /**
         * @var array<Reservation>
         */
        private array $reservations = [];

        public function createReservation(int $id, Room $room, User $user, DateTime $start_at, DateTime $end_at): void
        {
            $this->reservations[$id] = new Reservation($id, $room, $user, $start_at, $end_at);
        }

        /**
         * @throws \Exception
         */
        public function cancelReservation(int $id): void
        {
            if (!isset($this->reservations[$id])) {
                echo "* Reservation not found";
            }
            $this->reservations[$id]->setStatus('cancelled');
        }

        public function removeReservation(int $id): void
        {
            if (!isset($this->reservations[$id])) {
                echo "* Reservation not found";
            }
            unset($this->reservations[$id]);
        }

        public function findById(int $reservationId): ?Reservation
        {
            if (!isset($this->reservations[$reservationId])) {
                return null;
            }
            return $this->reservations[$reservationId];
        }

        public function findByUser(int $userId): array
        {
            $reservationsReturn = [];
            foreach ($this->reservations as $reservation) {
                if ($reservation->getUser()->getId() === $userId) {
                    $reservationsReturn[] = $reservation;
                }
            }
            return $reservationsReturn;
        }

        public function findByRoom(int $roomId): array
        {
            $reservationsReturn = [];
            foreach ($this->reservations as $reservation) {
                if ($reservation->getRoom()->getId() === $roomId) {
                    $reservationsReturn[] = $reservation;
                }
            }
            return $reservationsReturn;
        }

        public function findByDate(DateTime $date): array
        {
            $reservationsReturn = [];
            foreach ($this->reservations as $reservation) {

                $startAt = $reservation->getStartAt();
                $endAt = $reservation->getEndAt();

                if ($date >= $startAt && $date < $endAt) {
                    $reservationsReturn[] = $reservation;
                }
            }
            return $reservationsReturn;
        }

        public function findAll(): array
        {
            return $this->reservations;
        }


        /**
         * @param array{
         *     room_id?: int,
         *     user_id?: int,
         *     date?: DateTime
         * } $filters
         *
         * @return array
         */
        //TODO : En cours de dev
        public function find(array $filters) : array {
            $reservationsReturn = [];

            $roomOk = false;
            $userOk = false;
            $dateOk = false;

            $filterRoomId = $filters['room'] ?? null;
            $filterUserId = $filters['user'] ?? null;
            $filterDate = $filters['date'] ?? null;

            foreach ($this->reservations as $reservation) {

                if (
                    $filterRoomId === null ||
                    $reservation->getRoom()->getId() === $filterRoomId
                ) {
                    $roomOk = true;
                }


                if (
                    $filterUserId === null ||
                    $reservation->getUser()->getId() === $filterUserId
                ) {
                    $userOk = true;
                }


                $startAt = $reservation->getStartAt();
                $endAt = $reservation->getEndAt();

                if (
                    $filterDate === null ||
                    $filterDate >= $startAt && $filterDate < $endAt
                ) {
                    $dateOk = true;
                }

                var_dump([
                    'roomOk' => $roomOk,
                    'userOk' => $userOk,
                    'dateOk' => $dateOk
                ]);

                if ($roomOk && $userOk && $dateOk) {
                    $reservationsReturn[] = $reservation;
                }
            }


            return $reservationsReturn;
        }
    }