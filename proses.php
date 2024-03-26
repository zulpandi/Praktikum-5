<?php

class Keterangan {
    public $nama;
    public $alamat;
    public $umur;
    public $citacita;

    public function __construct($nama, $alamat, $umur, $citacita) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->umur = $umur;
        $this->citacita = $citacita;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Pastikan input tidak kosong sebelum membuat objek Keterangan
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        $umur = isset($_POST['umur']) ? $_POST['umur'] : '';
        $citacita = isset($_POST['citacita']) ? $_POST['citacita'] : '';
    
        // Pastikan data yang diterima adalah string
        if (is_string($nama) && is_string($alamat) && is_string($umur) && is_string($citacita)) {
            // Include file kelas Keterangan
            // Buat objek Keterangan
            $keterangan = new Keterangan($nama, $alamat, $umur, $citacita);
        } else {
            // Jika input tidak valid, berikan pesan kesalahan
            echo "Input tidak valid!";
        }
    }
    ?>

    <div class="container mt-5">
        <h1>Keterangan Mahasiswa</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Cita Cita</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo isset($nama) ? $nama : '' ?></td>
                    <td><?php echo isset($alamat) ? $alamat : '' ?></td>
                    <td><?php echo isset($umur) ? $umur : '' ?></td>
                    <td><?php echo isset($citacita) ? $citacita : '' ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>