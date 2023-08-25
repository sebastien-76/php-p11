<?php declare(strict_types=1);

namespace App\Mixin;

trait Criable
{
    protected $cri = '';

 //setter
    public function setcri($cri)
    {
        if(strrpos($cri, '!!!') !== strlen($cri) - 3 ) {
            //declare les erreurs en php
            throw new Exception('Les cris doivent crier avec trois points d\'exclamation');
        }
            //design pattern fluent
            $this->cri = $cri;

        return $this;
    }
    public function crier()
    {
        echo $this->cri."\n";
        //design pattern fluent
        return $this;
    }
}