<?php
class BankAccount {
    public $pemilik;
    private $saldo;

    public function __construct($pemilik, $saldoAwal) {
        $this->pemilik = $pemilik;
        $this->saldo = $saldoAwal;
    }

    public function deposit($jumlah) {
        $this->saldo += $jumlah;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$akun = new BankAccount("Andi", 1000000);
$akun->deposit(500000);
// $akun->saldo = 99999999; // ERROR kalau dicoba
echo $akun->getSaldo();
?>