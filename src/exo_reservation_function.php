<?php


    function createReservation(array &$reservations, string $id, string $userName, string $roomName, DateTime $date, string $status): void
    {

        if ($status !== 'confirmée' && $status !== 'annulée') {
            throw new Exception('Status invalide');
        }
        $reservation = [
            'id' => $id,
            'userName' => $userName,
            'roomName' => $roomName,
            'date' => $date,
            'status' => $status
        ];

        $reservations[] = $reservation;
    }

    /**
     * Afficher a l'ecran les informations d'une reservation
     *
     * @param array $reservation
     *
     * @return void
     */
    function showReservation(array $reservation) : void {
        echo 'ID: ' . $reservation['id'] . '<br>';
        echo 'Nom de l\'utilisateur: ' . $reservation['userName'] . '<br>';
        echo 'Salle: ' . $reservation['roomName'] . '<br>';
        echo 'Date: ' . $reservation['date']->format('d/m/Y H:i') . '<br>';
        echo 'Status: ' . $reservation['status'] . '<br>';
    }

    function listReservation(array $reservations, string|null $status, DateTime|null $date): void
    {
        foreach ($reservations as $reservation) {
           if ($status !== null && $reservation['status'] !== $status) {
               continue;
           }
           if ($date !== null && $reservation['date'] !== $date) {
               continue;
           }

            showReservation($reservation);
            echo '<br>';
        }
    }

    function deleteReservation(array &$reservations, string $id): void
    {
        foreach ($reservations as &$reservation) {
            if ($reservation['id'] === $id) {
                $reservation['status'] = 'annulée';
            }
        }

        echo '<p>reservations supprimé</p>';
    }

    function findReservation(array $reservations, string $userName): void
    {
        foreach ($reservations as $reservation) {
            if ($reservation['userName'] === $userName) {
                showReservation($reservation);
                echo '<br>';
            }
        }
    }


    $reservations = [];

    //test
    echo "<h1>Test 1 : Création de réservations</h1>";
    createReservation($reservations, '1', 'Jean', 'Salle 1', new DateTime('2021-01-01 08:00'), 'confirmée');
    createReservation($reservations, '2', 'Paul', 'Salle 2', new DateTime('2021-01-01 09:00'), 'confirmée');
    createReservation($reservations, '3', 'Pierre', 'Salle 3', new DateTime('2021-01-01 10:00'), 'confirmée');
    createReservation($reservations, '4', 'Paul', 'Salle 1', new DateTime('2021-01-02 10:00'), 'confirmée');

    echo "<h1>Test 2 : liste des réservations confirmée</h1>";
    listReservation($reservations, 'confirmée', null);

    echo "<h1>Test 3 : delete réservation</h1>";
    deleteReservation($reservations, '2');

    echo "<h1>Test 4 : liste des réservations confirmée</h1>";
    listReservation($reservations, 'confirmée', null);

    echo "<h1>Test 5 : liste des réservations annulée</h1>";
    listReservation($reservations, 'annulée', null);

    echo "<h1>Test 6 : findReservation Paul</h1>";
    findReservation($reservations, 'Paul');

    echo "<h1>Test 6 : findReservation Paul</h1>";
    findReservation($reservations, 'Paul');

