<?php
class Produk {
    private $nama;
    private $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getInfo() {
        return $this->nama . " - Rp " . number_format($this->harga, 0, ',', '.');
    }
}

$p1 = new Produk("Laptop", 8500000);
$p2 = new Produk("Mouse", 150000);

echo $p1->getInfo() . "<br>";
echo $p2->getInfo() . "<br>";
?>