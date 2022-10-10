<?php

class PersegiPanjang{
    private $panjang;
    private $lebar;

    function __construct($P, $L){
        $this->panjang = $P;
        $this->lebar = $L;
    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }

    function getKeliling(){
        return ($this->panjang * 2) + ($this->lebar * 2);
    }

    function Panjang(){
        return $this->panjang;
    }

    function Lebar(){
        return $this->lebar;
    }
}

?>