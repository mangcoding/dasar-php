<?php 
class Persegi {
    public $sisi;
    public $luas;

    public function __construct($sisi) {
        $this->setSisi($sisi);
    }

    private function hitungLuas() {
        $this->luas = $this->sisi * $this->sisi;
    }
    
    private function setSisi($sisi) {
        $this->sisi = $sisi;
        $this->hitungLuas();
    }

    public function getSisi() {
        return $this->sisi;
    }

    public function getLuas() {
        return $this->luas;
    }
}


$persegi = new Persegi(15);
echo $persegi->getLuas();