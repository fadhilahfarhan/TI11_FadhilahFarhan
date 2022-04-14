<?php

class NilaiMahasiswa{
    var $matkul;
    var $nilai;
    var $nim;

    function __construct($matkul,$nilai,$nim){
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function Predikat(){
        if($this->nilai >= 56 and $this->nilai <= 100){
            return 'LULUS';
        }
        elseif($this->nilai >= 0 and $this->nilai < 56){
            return 'TIDAK LULUS';
        }
        else{
            return 'NILAI TIDAK VALID !!';
        }
    }

    function hitungNilai(){
        return $this->nilai;
    }

    function Grade(){
        if($this->nilai >= 0 and $this->nilai <= 35){
            return 'E';
        }
        elseif($this->nilai >= 36 and $this->nilai <= 55){
            return 'D';
        }
        elseif($this->nilai >= 56 and $this->nilai <= 69){
            return 'C';
        }
        elseif($this->nilai >= 70 and $this->nilai <= 84){
            return 'B';
        }
        elseif($this->nilai >= 85 and $this->nilai <= 100){
            return 'A';
        }
        else{
            return 'NILAI TIDAK VALID !!';
        }
    }
}

?>