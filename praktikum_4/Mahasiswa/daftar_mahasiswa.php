<?php

require_once 'class_mahasiswa.php';

$mahasiswa1 = new Mahasiswa('0110221277', 'Umar', '2020', 'TI', '3.8');
$mahasiswa2 = new Mahasiswa('0110121187', 'jamaludin Pentol', '2021', 'TI', '4.0');
$mahasiswa3 = new Mahasiswa('0110121467', 'Aisyah Febrianti', '2021', 'SI', '3.7.0');
$mahasiswa4 = new Mahasiswa('0110121268', 'Ahha Halilintar', '2021', 'SI', '3.5');


$arr_mahasiswa1 = ['nim'=>$mahasiswa1->nim, 'nama'=>$mahasiswa1->nama, 'prodi'=>$mahasiswa1->prodi, 'thnAngkatan'=>$mahasiswa1->thnAngkatan, 'ipk'=>$mahasiswa1->ipk, 'predikat'=>$mahasiswa1->predikatIpk()];
$arr_mahasiswa2 = ['nim'=>$mahasiswa2->nim, 'nama'=>$mahasiswa2->nama, 'prodi'=>$mahasiswa2->prodi, 'thnAngkatan'=>$mahasiswa2->thnAngkatan, 'ipk'=>$mahasiswa2->ipk, 'predikat'=>$mahasiswa2->predikatIpk()];
$arr_mahasiswa3 = ['nim'=>$mahasiswa3->nim, 'nama'=>$mahasiswa3->nama, 'prodi'=>$mahasiswa3->prodi, 'thnAngkatan'=>$mahasiswa3->thnAngkatan, 'ipk'=>$mahasiswa3->ipk, 'predikat'=>$mahasiswa3->predikatIpk()];
$arr_mahasiswa4 = ['nim'=>$mahasiswa4->nim, 'nama'=>$mahasiswa4->nama, 'prodi'=>$mahasiswa4->prodi, 'thnAngkatan'=>$mahasiswa4->thnAngkatan, 'ipk'=>$mahasiswa4->ipk, 'predikat'=>$mahasiswa4->predikatIpk()];

$arr_mahasiswa = [$arr_mahasiswa1, $arr_mahasiswa2, $arr_mahasiswa3, $arr_mahasiswa4];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <table style="width:100%;" class="table table-light table-striped table-hover shadow text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Tahun Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $iterasi = 1; 
            foreach($arr_mahasiswa as $arr){
            echo '<tr>';
            echo '<td>'.$iterasi++ .'</td>';
            echo '<td>'.$arr['nim'].'</td>';
            echo '<td>'.$arr['nama'].'</td>';
            echo '<td>'.$arr['thnAngkatan'].'</td>';
            echo '<td>'.$arr['prodi'].'</td>';
            echo '<td>'.$arr['ipk'].'</td>';
            echo '<td>'.$arr['predikat'].'</td>';
            echo '</tr>';
        }?>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>