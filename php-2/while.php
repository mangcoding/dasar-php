<?php 

$a=1;
while ($a <= 10) {
    echo "*****************<br>";
    $b = 1;
    while ($b <= 10) {
        echo "$a X $b = ".$a*$b."<br>";
        $b++;
    }
    $a++;
}