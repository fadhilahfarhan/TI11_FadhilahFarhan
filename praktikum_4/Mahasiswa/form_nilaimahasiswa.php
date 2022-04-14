<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-4 ">
    <form action="form_nilaimahasiswa.php" method="POST">
    <div class="form-group row">
        <label class="col-2 col-form-label" for="nim">NIM</label> 
        <div class="col-4">
        <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="matakuliah" class="col-2 col-form-label">Mata Kuliah</label> 
        <div class="col-4">
        <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
            <option value="Data Warehouse">Data Warehouse</option>
            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
            <option value="Statistika">Statistika</option>
            <option value="Komunikasi Efektif">Komunikasi Efektif</option>
            <option value="PPKN">PPKN</option>
            <option value="English">English</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
            <option value="UI/UX">UI/UX</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="nilai" class="col-2 col-form-label">Nilai</label> 
        <div class="col-4">
        <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="text" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-3 col-4">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>

<?php
    require_once 'class_nilaimahasiswa.php';
    if ($_POST) {
        $ns = new NilaiMahasiswa($_POST['matakuliah'], $_POST['nilai'], $_POST['nim']);
        $TotalNilai = $ns->hitungNilai();
        $grade = $ns->grade();
        $predikat = $ns->predikat();

        echo "<div class=\"container\">";
        echo "<p>NIM : ". $ns->nim . "</p>";
        echo "<p>Mata Kuliah : ". $ns->matkul . "</p>";
        echo "<p>Nilai : ". $ns->nilai . "</p>";
        echo "<p>Hasil Ujian : ". $grade . "</p>";
        echo "<p>Grade : ". $predikat . "</p>";
        echo "</div>";
    }
?>
</body>
</html>