<?php 
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

function hallo() {
    return 'hallo dunia';
}

function hitungLuasPersegiPanjang($panjang, $lebar=15) {
    $luas = $panjang * $lebar;
    return $luas;
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