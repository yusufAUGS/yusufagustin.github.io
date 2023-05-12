<?php 
class Mahasiswa {
    private $nama;
    private $npm;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNpm($npm) {
        $this->npm = $npm;
    }

    public function getNpm() {
        return $this->npm;
    }
}

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa();

// Menggunakan setter untuk mengatur nilai nama dan npm
$mahasiswa->setNama("Yusuf Agustin");
$mahasiswa->setNpm("2135051");

// Menggunakan getter untuk mendapatkan nilai nama dan npm
echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NPM: " . $mahasiswa->getNpm() . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>NPM: <?php echo $npm; ?></p>
</body>
</html>
