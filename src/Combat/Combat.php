<?php

namespace App\Combat;

use App\Personnage\Hero;
Use App\Personnage\Ennemi;


class Combat
{
    private $hero = null;
    private $ennemi = null;

    public function __construct(Hero $hero, Ennemi $ennemi)
    {
        $this->hero = $hero;
        $this->ennemi = $ennemi;
    }

    public function getHero() : Hero
    {
        return $this->hero;
    }
    public function setHero(HERO $hero) : static
    {
        $this->hero = $hero;
    }    
    public function getEnnemi() : Ennemi
    {
        return $this->ennemi;
    }
    public function setEnnemi(Ennemi $ennemi) : static
    {
        $this->ennemi = $ennemi;
    }

    public function action()
    {
        //le ennemi attaque
        //$this->ennemi->crier();
        $attaque = $this->ennemi->getPuissance() * random_int(5, 15) / 10;
        $vie = $this->hero->getVie() - $attaque;
        $this->hero->setVie($vie);
        //si le heros est mort, il ne peut pas contre attaquer
        if ($this->hero->getVie() == 0) {
            return;
        }

        //le heros contre attaque
        //$this->heros->crier;
        $attaque = $this->hero->getPuissance() * random_int(5, 15) / 10;
        $vie = $this->ennemi->getVie() - $attaque;
        $this->ennemi->setVie($vie);
    }
    public function estFini()
    {  
        if ($this->hero->getVie() == 0 || $this->ennemi->getVie() == 0) {
            return true;
        }
        return false;
    }
}