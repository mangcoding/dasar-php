<?php 
$header="sebelum fungsi";

function WebHeader() {
    global $header;
    $header = "<h1>welcome to my website</h1>";
}

function perkalian($a, $b) {
    $c = $a * $b;
    return $c;
}

function konversiSuhu($suhu, $dari_satuan="celcius", $ke_satuan="fahrenheit") {
    if ($dari_satuan == "celcius") {
        if ($ke_satuan == "fahrenheit") {
            $hasil = $suhu * 9/5 + 32;
        }elseif ($ke_satuan == "kelvin") {
            $hasil = $suhu + 273.15;
        } else {
            $hasil = $suhu;
        }
    } elseif ($dari_satuan == "fahrenheit") {
        if ($ke_satuan == "celcius") {
            $hasil = ($suhu - 32) * 5/9;
        } elseif ($ke_satuan == "kelvin") {
            $hasil = ($suhu + 459.67) * 5/9;
        } else {
            $hasil = $suhu;
        }
    } elseif ($dari_satuan == "kelvin") {
        if ($ke_satuan == "celcius") {
            $hasil = $suhu - 273.15;
        } elseif ($ke_satuan == "fahrenheit") {
            $hasil = $suhu * 9/5 - 459.67;
        } else {
            $hasil = $suhu;
        }
    } else {
        $hasil = $suhu;
    }
    return $hasil;
}

echo "100 C sama dengan ".konversiSuhu(100)." F";
echo "<br>100 F sama dengan ".konversiSuhu(100,"fahrenheit")." F";
echo "<br>100 C sama dengan ".konversiSuhu(100,"celcius","kelvin")." K";