<?php declare(strict_types=1);

namespace App\Personnage;
use App\Personnage\Personnage;

class Monstre extends Personnage implements Ennemi
{
    protected $puissance = 10;
    protected $cri = "GROAR !!!!";    
}
