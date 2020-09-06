<?php
function olovka(string $a){
    $b=str_split($a);
    $broj=count($b);
    $brojf=count($b)-1;

    echo $a;
    echo "<br>";
    for($i=0;$i<=$brojf;$i++){
        echo $b[--$broj];

    }

}



olovka("koliko god upisao to je top");