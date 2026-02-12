<?php
class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;

    public function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    public function getStatus() {
        if ($this->ipk >= 3.0) {
            return "Baik";
        } else {
            return "Perlu bimbingan";
        }
    }

    // Method untuk menampilkan info mahasiswa
    public function tampilkanInfo() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Status: " . $this->getStatus() . "<br><br>";
    }
}

// 2 object
$mhs1 = new Mahasiswa("T3124058", "Aldo", 3.5);
$mhs2 = new Mahasiswa("T3124059", "Budi", 2.8);

// Tampilkan info masing-masing
$mhs1->tampilkanInfo();
$mhs2->tampilkanInfo();
?>
