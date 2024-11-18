<?php

use App\Exo_singletonConnexion\Configuration;
use App\Exo_singletonConnexion\DatabaseConnection;

    require __DIR__ . '/../vendor/autoload.php';

    // $conn = Configuration::getInstance();

    // echo'<pre>';
    // var_dump($conn);
    // echo '</pre>';
    // echo'<pre>';
    // var_dump($conn);
    // echo '</pre>';
    // echo'<pre>';
    // var_dump($conn);
    // echo '</pre>';
   
    // $host = $conn->get('database.host');
    // $host = $conn->get('host');
    // echo'Test Key "host" -> value = '.$host;

    $dbc = new DatabaseConnection();
    $connexion = $dbc->getConnection();
    $usersStatement = $connexion->prepare('SELECT * FROM Users');
    $usersStatement->execute();
    $users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);
    $users = array_map(function($user) {
        // echo'<pre>';
        // var_dump($user);
        // echo'</pre>';
        return $user['first_name'];
    },$users);

    echo'<pre>';
    var_dump($users);
    echo'</pre>';