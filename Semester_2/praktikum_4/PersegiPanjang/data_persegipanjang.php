<?php

require_once 'class_persegipanjang.php';

$persegiPanjang1 = new PersegiPanjang (10, 5);
$persegiPanjang2 = new PersegiPanjang (15, 8);


echo "<br/>Luas Persegi Panjang I = ".$persegiPanjang1->getLuas();
echo "<br>Luas Persegi Panjang II = ".$persegiPanjang2->getLuas();

echo "<br>Keliling Persegi Panjang I = ".$persegiPanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II = ".$persegiPanjang2->getKeliling();
?>