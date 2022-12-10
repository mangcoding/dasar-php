<?php 

$bangku = array("imam","hp-imam","kosong","kosong","gojali","aqua");

for ($i=0; $i<count($bangku); $i++) {
    if ($bangku[$i] == "kosong") {
        echo "Bangku ke-".($i+1)." kosong<br>";
    } else {
        echo "Bangku ke-".($i+1)." terisi oleh ".$bangku[$i]."<br>";
    }
}

