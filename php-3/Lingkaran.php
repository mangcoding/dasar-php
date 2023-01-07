<?php 

class Lingkaran {
    //Properties
    public $jari;
    private $phi = 22/7;

    //Constructor Method
    public function __construct($jari=0) {
        $this->setJari($jari);
    }

    private function setJari($jari) {
        $this->jari = $jari;
    }

    public function luas() {
        return $this->phi * $this->jari * $this->jari;
    }

    public function keliling() {
        return 2 * $this->phi * $this->jari;
    }
}

$lingkaran = new Lingkaran(7);
// $lingkaran->setJari(7);
echo "Luas lingkaran dengan jari-jari 7 cm adalah ".$lingkaran->luas()." cm<sup>2</sup>";
echo "<br>";
echo ($lingkaran instanceof Lingkaran) === true ? "true" : "false";
echo "<br>";
echo ($lingkaran instanceof Persegi) === true ? "true" : "false";