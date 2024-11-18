<?php
    require __DIR__ . '/../vendor/autoload.php';

    use App\Exo_interface_correction\CallableInterface;
    use App\Exo_interface_correction\Company;
    use App\Exo_interface_correction\Contactable;
    use App\Exo_interface_correction\ContactableInterface;
    use App\Exo_interface_correction\EmailableInterface;
    use App\Exo_interface_correction\EmailInterface;
    use App\Exo_interface_correction\User;


    function call(CallableInterface $obj)
    {
        echo "#### call ####<br>";
        echo "Appel du numéro " . $obj->getTelephone() . " en cours...<br>";
    }

    function showUser(ContactableInterface $obj) {
        echo "#### showUser ####<br>";
        echo "Nom : " . $obj->getNom() . "<br>";
        echo "Prénom : " . $obj->getPrenom() . "<br>";
    }

    function sendEmail(EmailInterface|EmailableInterface $obj, string $message) {
        echo "#### sendEmail ####<br>";
        $senderName = ($obj instanceof EmailableInterface) ? $obj->getSender() : $obj->getEmail();
        echo "send to : " . $senderName . "<br>";
        echo "message : " . $message . "<br>";
    }

    $user = new User(
        "Galoyer",
        "Marc",
        42,
        "mgaloyer@uneak.fr",
        "06 12 34 56 78"
    );

    $contact = new Contactable(
        "LaRochelle",
        "Drucila",
        "drucila@email.com",
    );

    $company = new Company(
        "Uneak",
        "01 23 45 67 89",
        "contact@uneak.fr",
    );


    call($user);
    call($company);

    showUser($user);
    showUser($contact);

    sendEmail($user, "Hello");
    sendEmail($contact, "Hi");
    sendEmail($company, "Bonjour");
