<?php 

$bangku = array("imam","hp-imam","kosong","kosong","gojali","aqua");

foreach($bangku as $index => $isi) {
    if ($isi == "kosong") {
        echo "Bangku ke-".($index+1)." kosong<br>";
    } else {
        echo "Bangku ke-".($index+1)." terisi oleh ".$isi."<br>";
    }
}