<?php declare(strict_types=1);

/* require __DIR__.'/src/Personnage.php';
require __DIR__.'/src/Hero.php';
//la classe Hero dépend de Personnage
require __DIR__.'/src/Monstre.php';
//la classe Monstre dépend de Personnage
require __DIR__.'/src/Combat.php';
//la classe combat est composée de la classe heros et de la classe montre */
use App\Personnage\Monstre;
use App\Personnage\Hero;
use App\Combat\Combat;

use App\Personnage\Vampire;
use App\Decor\Arbre;

use App\Personnage\Personnage;

require __DIR__.'/../vendor/autoload.php';

/* Classe abstraite, le personnage ne peut pas être instancié directement */
/* $p = new Personnage();
$p->setCri('... !!!')
    ->crier()
; */

$a = new Arbre();
$a
    ->setCRi('JE S\'APPELLE GROOT !!!')
    ->crier()
;

$m = new Monstre();
$m->crier();
echo $m->getPuissance()."\n";

$v = new Vampire();
$v
    ->setcri('CRIIII !!!')
    ->crier()
    ->setPuissance(20)
;
echo $v->getPuissance()."\n";

$hero = new Hero();


$combat1 = New Combat($hero, $m);
// $combat1->setMonstre($m);
// $combat1->setHero($hero);

$combat2 = New Combat($hero, $v);
// $combat2->setMonstre($v);
// $combat2->setHero($hero);

while ($combat1->estFini() == false || $combat2->estFini() == false ) {
    //le combat continue
    $combat1->action();
    $combat2->action();

    echo "\n";
    echo "monstre 1 = ".$m -> getVie()." point de vie"."\n";
    echo "vampire = ".$v -> getVie()." point de vie"."\n";
    echo "Hero = ".$hero -> getVie()." point de vie"."\n";
    echo "\n";
}

if ($hero->getVie() == 0 && $m->getVie() == 0 && $v->getVie() ==0) {
    echo "match nul";
} elseif ($hero->getVie() > 0) {
    echo "Le héros a gagné!\n";
    $hero->crier();
} else { //$hero->getVie() == 0
    echo "Vous êtes mort!\n";
    if ($m -> getVie() > 0) {
        $m->crier();
    }
    if ($v -> getVie() > 0) {
        $v->crier();
    }
}


