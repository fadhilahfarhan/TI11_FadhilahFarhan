<?php
class BMI {
    public $berat;
    public $tinggi;
    public function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    public function nilai(){
        return number_format($this->berat / pow($this->tinggi / 100, 2),1);
    }
    public function status(){
        $nilai = $this->nilai();
        if($nilai < 18.5){
            return 'Kekurangan Berat Badan';
        }
        elseif($nilai >= 18.5 && $nilai <= 23.9){
            return 'Normal (Ideal)';
        }
        elseif($nilai >= 24 && $nilai <= 29.9){
            return 'Kelebihan berat badan';
        }
        else return 'Sangat Gemuk (obesitas)';
    }
}
?>