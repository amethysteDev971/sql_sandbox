<?php
    require __DIR__ . '/../vendor/autoload.php';

    use App\Tamagotchi_corr_marc\Action\BarkAction;
    use App\Tamagotchi_corr_marc\Action\EatAction;
    use App\Tamagotchi_corr_marc\Action\MeowAction;
    use App\Tamagotchi_corr_marc\Action\PlayAction;
    use App\Tamagotchi_corr_marc\Action\SleepAction;
    use App\Tamagotchi_corr_marc\Action\SwimAction;
    use App\Tamagotchi_corr_marc\CatTamagotchi;
    use App\Tamagotchi_corr_marc\DogTamagotchi;
    use App\Tamagotchi_corr_marc\FishTamagotchi;
    use App\Tamagotchi_corr_marc\TamagotchiGarden;



    $garden = new TamagotchiGarden([
        new CatTamagotchi('Garfield'),
        new DogTamagotchi('Plutot'),
        new FishTamagotchi('Dori')
    ]);

    $garden->performActions([
        new SleepAction(),
        new BarkAction(),
        new SwimAction(),
        new EatAction(),
        new PlayAction(),
        new MeowAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
        new PlayAction(),
    ]);