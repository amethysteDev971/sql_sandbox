<?php

require 'Humain.php';
require 'Femme.php';
require 'Homme.php';



// $agnes = new Humain('Agnes',51,'Feminin',1.54,'Shabin(e)','Guadeloupe',);
// $marie = new Humain('Marie-Helene',50,'Feminin',1.68,'Black','Guadeloupe');
// $gary = new Humain('Gary',26,'Masculin',1.78,'Black','Guadeloupe');
// $drucila = new Humain('Drucila',24,'Feminin',1.78,'Shabin(e)','Guadeloupe');
// $marc = new Humain('Marc',42,'Masculin',1.90,'Shabin(e)','Guadeloupe');


// // echo $agnes->getNom();
// echo $agnes->parler('Hello, je m\'appelle '. $agnes->getNom()).'<br>';
// echo $marie->parler('Hello, ça va ?').'<br>';
// echo $gary->parler().'<br>';
// echo $drucila->parler('Nice too meet You, je suis passionnée par le Web Design').'<br>';
// echo $marc->parler('Moi c\'est '. $marc->getNom(). 'et je suis un Développeur Professionnel').'<br>';


$agnes = new Femme('Agnes',51,'Guadeloupe');
$agnes->parler();
echo '<br>';
$marc = new Homme('Marc',42,'Guadeloupe');
$marc->parler();
