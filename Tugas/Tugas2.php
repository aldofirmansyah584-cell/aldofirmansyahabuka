<?php
class Buku {
    // Private properties
    private $judul;
    private $penulis;
    private $tahunTerbit;

    // Constructor untuk menerima nilai judul, penulis, dan tahun terbit
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Method untuk mengembalikan info buku
    public function getInfo() {
        return "Judul: " . $this->judul . 
               ", Penulis: " . $this->penulis . 
               ", Tahun: " . $this->tahunTerbit;
    }
}

// Membuat minimal 3 object Buku
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009);
$buku3 = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980);

// Tampilkan info masing-masing di browser
echo $buku1->getInfo() . "<br>";
echo $buku2->getInfo() . "<br>";
echo $buku3->getInfo() . "<br>";
?>
