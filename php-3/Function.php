<?php 
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

function hallo() {
    return 'hallo dunia';
}

//Contoh fungsi dengan parameter default
function hitungLuasPersegiPanjang($panjang, $lebar=15) {
    $luas = $panjang * $lebar;
    return $luas;
}

function konversiSuhu($suhu, $dari="C", $ke="R") {
    if ($dari == "C" && $ke=="R") {
        $hasil = $suhu * 4/5;
    } else if ($dari == "R" && $ke=="C") {
        $hasil = $suhu * 5/4;
    } else {
        $hasil = "Tidak bisa dikonversi";
    }

    return $hasil;
}

echo hitungLuasPersegiPanjang(10,25);
echo "<br>";
echo hallo();
echo "<br>";
echo hitungLuasPersegi(15);
echo "<br>";
echo hitungLuasPersegi(10);
echo "<br>";
echo hitungLuasPersegi(5);
echo "<br>";
echo "Hasil Konversi dari Suhu 100C ke Reamaur adalah ".konversiSuhu(100);