<?php
    require_once 'libfungsi.php';

    
    if(!empty( $_POST['kirim'])){
        $nama = $_POST['nama'];
        $mataKuliah = $_POST['mataKuliah'];
        $UAS = $_POST['UAS'];
        $UTS = $_POST['UTS'];
        $TUGAS = $_POST['TUGAS'];

        $total = Total($UAS, $UTS, $TUGAS);
        $status = kelulusan($total);
        $grade = Grade($total);
        $predikat = Predikat($grade);
        echo'
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="d-flex justify-content-center">
            <div class="card mb-3 mt-3" style="width: 30rem;">
                <div class="card-header bg-success">
                    <h3 class="text-white fw-bold text-center">Laporan Nilai</h3>
                </div>
                <div class="card-body">
                    <p>Nama Lengkap  : <b>' . $nama; echo '</b></p>
                    <p>Mata Kuliah : <b>' . $mataKuliah; echo '</b></p>
                    <p>Nilai UTS : <b>' . $UTS; echo '</b></p>
                    <p>Nilai UAS : <b>' . $UAS; echo '</b></p>
                    <p>Nilai TUGAS : <b>' . $TUGAS; echo '</b></p>
                    <p>Status : <b>' . $status; echo '</b></p>
                    <P>grade : <b>' . $grade; echo '</b></P>
                    <p>Predikat : <b>' . $predikat; echo '</b></p>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        ';
    }
?>