<?php

class Manusia {
    public $nama;
    public $umur;
    
    public function setNama($name){
        $this->nama = $name;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function getInfo(){
        return "Nama: " . $this->nama . ", Umur: " . $this->umur;
    }
}

// Mengecek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat objek nama dan umur dari data yang dimasukkan
    $zulfan = new Manusia();
    $zulfan->setNama($_POST["nama"]);
    $zulfan->setUmur($_POST["umur"]);
    // Menampilkan informasi manusia
    echo $zulfan->getInfo();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Formulir Nama dan Umur</title>
</head>

<body>
    <h2>Formulir Nama dan Umur</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="nama">
        <br><br>
        Umur: <input type="text" name="umur">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>