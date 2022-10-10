<?php

require_once 'class_lingkaran.php';

echo 'Nilai PHI : ' . Lingkaran::PHI;

$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(5);

echo '<br>Luas Lingkaran 1 adalah ' . $lingkar1->getLuas();
echo '<br>Luas Lingkaran 2 adalah ' . $lingkar2->getLuas();

echo '<br>keliling Lingkaran 1 adalah ' . $lingkar1->getKeliling();
echo '<br>keliling Lingkaran 2 adalah ' . $lingkar2->getKeliling();

?>