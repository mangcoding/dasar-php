<?php
$angka = 3;

if ($angka %2 == 0) {
    echo "Angka $angka adalah bilangan genap";
} else {
    echo "Angka $angka adalah bilangan ganjil";
}

echo "<br>";

echo $angka %2 == 0 ? "Angka $angka adalah bilangan genap" : "Angka $angka adalah bilangan ganjil";

$gaji = 5000000;
$penghasilan = $gaji*12;
$category = "TK";

// TK = 0.5%;
// K0 = 0.4%;
// K1 = 0.3%;
// k2 = 0.2%;
// k3 = 0.1%;

if ($category == "TK") {
    $pajak = 0.5*$gaji/100;
}else if ($category == "K0") {
    $pajak = 0.4*$gaji/100;
}else if ($category == "K1") {
    $pajak = 0.3*$gaji/100;
}else if ($category == "K2") {
    $pajak = 0.2*$gaji/100; 
}else if ($category == "K3") {
    $pajak = 0.1*$gaji/100;
}
$pajakTahunan = $pajak*12;