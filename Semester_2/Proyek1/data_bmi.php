<?php
$page = 'Kalkulator Sehat';

require_once './class/Pasien.php';
require_once './class/BMI.php';
require_once './class/BMIPasien.php';

$pasien = [
    new Pasien(1, 'P001', 'Ahmad', 'L', 'Jakarta', '2002-12-31'),
    new Pasien(2, 'P002', 'Rina', 'P', 'Bandung', '2000-03-12'),
    new Pasien(3, 'P003', 'Lutfi', 'L', 'Jakarta', '2001-09-20'),
];

$bmi = [
    new BMI(69.8, 169),
    new BMI(55.3, 165),
    new BMI(45.2, 171),
];

$data = [
    new BMIPasien(1, $bmi[0], '2022-01-10', $pasien[0]),
    new BMIPasien(2, $bmi[1], '2022-01-10', $pasien[1]),
    new BMIPasien(3, $bmi[2], '2022-01-10', $pasien[2]),
];

if(isset($_POST['submit'])) {
  $Pasien_baru = new Pasien(4, 'P004', $_POST['nama'], $_POST['gender'], $_POST['tmp_lahir'], $_POST['tgl_lahir']);
  $Bmi_baru = new BMI($_POST['berat'], $_POST['tinggi']);
  $data[] = new BMIPasien(4, $Bmi_baru, date('Y-m-d'), $Pasien_baru);
}

?>
<?php include_once './layout/top.php'; ?>
<?php include_once './layout/navbar.php'; ?> 
<?php include_once './layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $page; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $page; ?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title">BMI Pasien</h3>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px;">ID</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $dt) { ?>
                        <tr>
                            <td><?= $dt->id ?></td>
                            <td><?= $dt->tanggal ?></td>
                            <td><?= $dt->pasien->kode ?></td>
                            <td><?= $dt->pasien->nama ?></td>
                            <td><?= $dt->pasien->gender ?></td>
                            <td><?= $dt->bmi->berat ?></td>
                            <td><?= $dt->bmi->tinggi ?></td>
                            <td><?= $dt->bmi->nilai() ?></td>
                            <td><?= $dt->bmi->status() ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <center class=" mt-5">
          <a href="add.php" class="btn btn-success">Tambah Pasien</a>
        </center>
      </section>
      <!-- /.content -->
    </div>

    <div class="modal fade" id="statusModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Status BMI</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="" alt="status" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

<?php include_once './layout/footer.php'; ?>
<?php include_once './layout/jslib.php'; ?>
<?php include_once './layout/bottom.php'; ?>