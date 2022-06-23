<?php
    for ($i=1; $i <= 5 ; $i++) { 
        for ($j=0; $j <= 5 ; $j++) { 
            echo "$i - $j <br>";
        }
    }

    $mobils = array("avanza", "xenia", "pajero", "bmw", "rocky");
    foreach ($mobils as $mobil) {
        echo $mobil."<br>";
    }

    for ($i = 1; $i <= 5 ; $i++) { 
        echo "data ke-". $i ."<br>";
    }

    $x = 1;
    while ($x <= 10) {
        echo "ini adalah data ke-". $x ."<br>";
        $x++;
    }

    // $x = 1;
    // do {
    //     echo "ini adalah nomor $x <br>";
    //     $x++;
    // } while ($x <= 5);
?>

