<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getProfile() {
        return "[$this->nim] $this->nama - $this->prodi";
    }
}

$m1 = new Mahasiswa("T3124058", "Aldo", "Teknik Informatika");
echo $m1->getProfile();
?>