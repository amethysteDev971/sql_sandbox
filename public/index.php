<?php

// require '../src/todo-list-test.php';

// echo '<h1>Ma page index</h1>';
// echo 'C\'est Good ! ! ! ! ! ! ! !';

// phpinfo();

require '../vendor/autoload.php';
// require DIR . '/../vendor/autoload.php';

// use App\reservation_Marc;
// use DateTime;
use App\reservation_Marc\User;
use App\reservation_Marc\ReservationManager;
use App\reservation_Marc\Room;
    
    $salleDeReunion = new Room(
        1,
        'Salle de réunion',
        10,
        5.5,
        7.5,
        'active',
        'Salle de réunion pour les réunions de travail',
        'salle-de-reunion.jpg'
    );

    $salleDeReunion2 = new Room(
        2,
        'Salle de réunion 2',
        10,
        5.5,
        7.5,
        'active',
        'Salle de réunion pour les réunions de travail',
        'salle-de-reunion.jpg'
    );




    $marc = new User(
        1,
        'Marc',
        'Doe',
        null,
        'admin',
        '0690123456',
        'mgaloyer@uneak.fr',
        '123456'
    );

    $gary = new User(
        2,
        'Gary',
        'Doe',
        null,
        'admin',
        '0690123456',
        'mgaloyer@uneak.fr',
        '123456'
    );


    /**
     * @param array<\Reservation> $list
     *
     * @return void
     */
    function showList(array $list): void
    {
        foreach ($list as $reservation) {
            echo $reservation->getId() . ' - ' . $reservation->getRoom()->getName() . ' - ' . $reservation->getUser()->getFirstName() . ' - ' . $reservation->getStartAt()->format('Y-m-d H:i:s') . ' - ' . $reservation->getEndAt()->format('Y-m-d H:i:s') . ' - ' . $reservation->getStatus() . '<br>';
        }
    }

    $manager = new ReservationManager();
    $manager->createReservation(1, $salleDeReunion, $marc, new DateTime('2021-09-01 09:00:00'), new DateTime('2021-09-01 17:00:00'));
    $manager->createReservation(2, $salleDeReunion2, $marc, new DateTime('2021-09-01 09:30:00'), new DateTime('2021-09-01 17:00:00'));
    $manager->createReservation(3, $salleDeReunion, $gary, new DateTime('2021-09-02 14:00:00'), new DateTime('2021-09-02 17:00:00'));

//    $manager->cancelReservation(2);
//    $manager->removeReservation(1);

//    var_dump($manager->findByDate(new DateTime('2021-09-02 14:00:01')));

    //TODO : finir le dev de la methode find()
    // showList($manager->find(['user' => 1, 'room' => 1]));

//    var_dump($manager);
   showList($manager->findAll());