<?php

echo "<b><h3>Konijnenrij</b></h3><br>";
echo "Met deze handige rekenmachine kan je uit rekenen hoe veel konijnen paartjes je hebt na een x aantal maanden. Uitgaande dat een konijnen paartje vanaf 2 maanden volwassen is en elk volwassen paar elke maand een nieuw paar nakomelingen produceert. Ook gaan er geen konijntjes dood.<br><br>";
 

$x = 0;
$y = 1;

$maanden = $_GET ["maanden"];
$maanden == $n;

for($n=0;$n == $maanden;$n++){
    
    $z = $x + $y;
    echo $z. "<br>";
    $x=$y;
    $y=$z;
}



echo "Naar ". $maanden. "  maand(en) ". $z. " konijnenpaartjes. Dat zijn ". $z*2 . " konijnen ";    
        
?>




