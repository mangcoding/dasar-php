<?php 
$buah = "jeruk";
switch($buah) {
    case "apel":
        $price = 10000;
        break;
    case "jeruk":
        $price = 20000;
        break;
    case "mangga":
        $price = 30000;
        break;
    default:
        $price = 0;
}

echo "<br>Harganya adalah : {$price}";

$prices = [
    "apel" => 10000,
    "jeruk" => 20000,
    "mangga" => 30000
];

echo "<br>Harganya adalah : {$prices[$buah]}";


$tahun = 2017;
echo $tahun%4==0 ? "<p>Kabisat" : "<p>Bukan Kabisat";