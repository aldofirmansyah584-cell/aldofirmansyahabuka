<?php
class fruit{

    public function __construct($nama){
        $this->nama = $nama
        }
}

$apple = [
        new fruit("Apple"),
        new fruit("Banana"),
        new fruit("mango")
]

    function($apple as $fruit){
        echo $fruit->nama: " . $fruit->nama; . "<br>";
    }
 ?>