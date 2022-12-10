<?php 
/*
Melakukan perulangan dulu, baru cek kondisi
*/

$a=1;
do {
    echo "=================<br>";
    $b = 1;
    do {
        echo "$a X $b = ".$a*$b."<br>";
        $b++;
    } while ($b <= 10);
    $a++;
}while($a <= 10);