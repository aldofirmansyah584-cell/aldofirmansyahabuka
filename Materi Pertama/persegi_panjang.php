<?php 

class PersegiPanjang{

public $panjang;
public $lebar;

public function hitungLuas(){
    return $this->panjang * $this->lebar ;
}

public function hitungKeliling(){
    return 2 * ($this->panjang + $this->lebar);

}
}


//Penulisan Object
$pp1 = new PersegiPanjang();
$pp1->panjang = 10;
$pp1->lebar = 5;

//object 2
$pp2 = new PersegiPanjang();
$pp2->panjang = 7;
$pp2->lebar = 3;


//CETAK
echo "<h3>Persegi Panjang 1</h3>";
echo "Panjang : {$pp1->panjang}<br>";
echo "Lebar : {$pp1->lebar}<br>";
echo "Luas : {$pp1->hitungLuas()}<br>";
echo "Keliling : {$pp1->hitungKeliling()}<br>";
echo "<hr>";
echo "<h3>Persegi Panjang 2</h3>";
echo "Panjang : {$pp2->panjang}<br>";
echo "Lebar : {$pp2->lebar}<br>";
echo "Luas : {$pp2->hitungKeliling()}<br>";
?>