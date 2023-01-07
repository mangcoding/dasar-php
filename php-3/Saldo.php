<?php 

class Saldo {
    //Properties
    private $saldo;

    //Constructor Method
    public function __construct($saldo=0) {
        $this->setSaldoAwal($saldo);
    }

    private function setSaldoAwal($saldo) {
        $this->saldo = $saldo;
    }

    public function nabung($saldo) {
        $this->saldo += $saldo;
    }

    public function kredit($saldo) {
        $this->saldo -= $saldo;
    }

    public function transfer($ke, $nominal) {
        $this->saldo -= $nominal;
    }

    public function getTransfer($dari, $nominal) {
        $this->saldo += $nominal;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}