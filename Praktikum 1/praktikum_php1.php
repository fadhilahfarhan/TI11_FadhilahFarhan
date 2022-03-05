<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php
        $ns1 = ['id'=>1, 'nim'=>'01101', 'uts'=>80, 'uas'=>84, 'tugas'=>78];
        $ns2 = ['id'=>2, 'nim'=>'01121', 'uts'=>70, 'uas'=>50, 'tugas'=>68];
        $ns3 = ['id'=>3, 'nim'=>'01130', 'uts'=>60, 'uas'=>86, 'tugas'=>70];
        $ns4 = ['id'=>4, 'nim'=>'01134', 'uts'=>90, 'uas'=>91, 'tugas'=>82];
        $ns5 = ['id'=>5, 'nim'=>'01136', 'uts'=>96, 'uas'=>94, 'tugas'=>84];
        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
        ?>
        <table style="width:100%;" class="table table-dark table-striped table-hover shadow text-center">
            <thead>
                <th>Nomor</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($ar_nilai as $value) {
                    echo '<tr><td>' . $nomor . '</td>';
                    echo '<td>' . $value['nim'] . '</td>';
                    echo '<td>' . $value['uts'] . '</td>';
                    echo '<td>' . $value['uas'] . '</td>';
                    echo '<td>' . $value['tugas'] . '</td>';
                    $nilai_akhir = ($value['uts'] + $value['uas'] + $value['tugas']) / 3;
                    echo '<td>' . number_format($nilai_akhir,2,',','.') . '</td>';
                    echo '<tr/>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>