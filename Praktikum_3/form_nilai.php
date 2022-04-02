

    <div class="container mt-3 ">
        <h2 class="text-center fw-bold">Form Nilai</h2>
        <form class="form-control" method="POST" action="nilai_siswa.php">
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-2">
                    <label for="#">Nama Lengkap</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" name="nama" type="text" placeholder="Masukan Nama" required autocomplete="off">
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-2">
                    <label for="#">Mata Kuliah</label>
                </div>
                <div class="col-md-5">
                    <select class="form-select" name="mataKuliah">
                        <option value="tidak ada">Pilih mataKuliah ...</option>
                        <option value="Dasar Dasar Pemrograman">- Dasar Dasar Pemrograman</option>
                        <option value="Pemrograman Web 2">- Pemrograman Web 2</option>
                        <option value="Data Base">- Data Base</option>
                        <option value="Jaringan Komputer">- Jaringan Komputer</option>
                    </select>
                </div> 
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-2">
                    <label for="#">Nilai UTS</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" name="UTS" type="text" value="" required autocomplete="off" placeholder="Masukan Nilai">
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-2">
                    <label for="#">Nilai UAS</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" name="UAS" type="text" value="" required autocomplete="off" placeholder="Masukan Nilai">
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-md-2">
                    <label for="#">Nilai Tugas/Praktik</label>
                </div>
                <div class="col-md-5">
                    <input class="form-control" name="TUGAS" type="text" value="" required autocomplete="off" placeholder="Masukan Nilai">
                </div>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-1">
                <input class="btn btn-primary" type="submit" name="kirim" value="Kirim" style="width: 100px;">
            </div>
        </form>
    </div>