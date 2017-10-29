<?php
    $nummers = array("3","4","5","8","99", "100", "22");
    //echo $nummers[4];
    
    $getal = 23;
    $getal = $getal + 3;
    echo $getal;
    $getal += 4;
    echo $getal;
    $getal += 1;
    $getal++;
    ++$getal;
    
    echo "<hr>";
    echo "<hr>";
    
    $eenVar = 16;
    echo ++$eenVar;
    echo $eenVar;
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    
    
    
    
    for($i = 3; $i < 28; $i += 2){
        echo "Hij doet het ";
        echo $i;
        echo "<br>";
    }
    
    for($k = 0; $k < count($nummers); $k++){
        echo "NIEWE REGEL IN ARRAYCOUNT : ";
        echo $nummers[$k];
        echo "<br>";
    }


?>
