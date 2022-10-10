<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Belanja</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-2 fw-bold">Belanja Online</h3>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <form action="index.php" method="POST" class="mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="inputName" class="form-label">Costumer </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="costumer" placeholder="Nama Costumer" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="inputName" class="form-label">Pilih Produk </label>
                            </div>
                            <div class="col-md-9 d-flex justify-content-around">
                                <div>
                                    <input type="radio" name="produk" value="tv" class="form-check-input">
                                    <label for="tv">TV</label>
                                </div>
                                <div>
                                    <input type="radio" name="produk" value="kulkas" class="form-check-input">
                                    <label for="tv">Kulkas</label>
                                </div>
                                <div>
                                    <input type="radio" name="produk" value="mesinCuci" class="form-check-input">
                                    <label for="tv">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="inputJumlah" class="form-label">Jumlah </label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="jumlah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="kirim" class="btn btn-primary" name="kirim">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Harga Barang</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                        </ul>
                        <div class="card-footer bg-primary text-white">Harga dapat berubah setiap saat</div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card mb-3 ">
                    <div class="card-header bg-success text-white fw-bold">Pesanan Anda</div>
                    <div class="card-body">
                        <?php
                        $kirim = $_POST['kirim'];
                        if (!empty($kirim)){
                            $Costumer = $_POST['costumer'];
                            $Produk = $_POST['produk'];
                            $Jumlah = $_POST['jumlah'];
                        }
                        echo '<p>Nama Costumer : ' . $Costumer . '</p>';
                        echo '<p>Produk Pilihan : ' . $Produk . '</p>';
                        echo '<p>Jumlah Beli : ' . $Jumlah . '</p>';
                        ?>
                    </div>
                    <div class="card-footer bg-success text-white fw-bold">
                        <?php
                        if($Produk == 'tv'){
                            $Total = $Jumlah * 4200000;
                        }elseif($Produk == 'kulkas'){
                            $Total = $Jumlah * 3100000;
                        }elseif($Produk == 'mesinCuci'){
                            $Total = $Jumlah * 3800000;
                        }else{
                            $Total = "";
                        }
                        echo 'Total : ' . $Total;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>