<?php declare(strict_types=1);

namespace App\Personnage;

use App\Mixin\Criable;

abstract class Personnage
{
    use Criable;

    protected $puissance = 0;
    protected $vie = 100;

    //getter
    public function getPuissance()
    {
        return $this->puissance;
        //design pattern fluent
        return $this;
    }
    
    //setter
    public function setPuissance($puissance)
    {
            $this->puissance = $puissance;

            //design pattern fluent
            return $this;
    }
    
    public function getVie()
    {
            return $this->vie;
    }
    public function setVie($vie)
    {
        if ($vie < 0) {
            $vie = 0;
        }

        $this->vie = $vie;
         //design pattern fluent
         return $this;

    }
}