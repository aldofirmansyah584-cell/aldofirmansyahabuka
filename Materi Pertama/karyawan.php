<?php
class karyawan {
    public $nama;
    public $gaji;
    public $jabatan;

    public function getInfo() {
        return "Nama : {$this->nama} <br>" .
               "Jabatan : {$this->jabatan} <br>" .
               "Gaji Rp. : " . number_format($this->gaji, 0, ',', '.') .
               "<br>";
    }
}

// object karyawan 1
$k1 = new karyawan();
$k1->nama = "Andi";
$k1->gaji = 5000000;
$k1->jabatan = "Manager";

// object karyawan 2
$k2 = new karyawan();
$k2->nama = "Budi";
$k2->gaji = 3000000;
$k2->jabatan = "Supervisor";

// object karyawan 3
$k3 = new karyawan();
$k3->nama = "Caca";
$k3->gaji = 2000000;
$k3->jabatan = "Staff";

// cetak
echo "<h3>Daftar Karyawan1</h3>";
echo $k1->getInfo();
echo "<hr>";

echo "<h3>Daftar Karyawan2</h3>";
echo $k2->getInfo();
echo "<hr>";

echo "<h3>Daftar Karyawan2</h3>";
echo $k3->getInfo();
?>