<?php

    require __DIR__ . '/../vendor/autoload.php';

    use App\Pokemon_correction\Pokemon\EauPokemon;
    use App\Pokemon_correction\Pokemon\FeuPokemon;
    use App\Pokemon_correction\Pokemon\PlantePokemon;

    $salameche = new FeuPokemon('Salameche');
    $carapuce = new EauPokemon('Carapuce', 3);
    $bulbizarre = new PlantePokemon('BulBizarre', 1);

    echo $salameche->showInfos();
    echo $carapuce->showInfos();
    echo $bulbizarre->showInfos();



    $salameche->attaquer($carapuce, 'Lance-flamme');
    $bulbizarre->attaquer($carapuce, 'Tranch herbe');
    $salameche->attaquer($carapuce, 'Lance-flamme');
    $salameche->attaquer($carapuce, 'Flammeche');
    $salameche->attaquer($carapuce, 'Lance-flamme');
    $salameche->attaquer($carapuce, 'Lance-flamme');

    echo $salameche->showInfos();
    echo $carapuce->showInfos();
    echo $bulbizarre->showInfos();
