<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $thnAngkatan;
    public $prodi;
    public $ipk;

    function __construct( $nim, $nama, $prodi, $thnAngkatan,  $ipk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->thnAngkatan = $thnAngkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function predikatIpk(){
        if ($this->ipk < 2.0) 
            return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return"Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return"Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0)
            return"Cum Laude";
        
    }  
}

?>