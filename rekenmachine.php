<?php

$a = $_GET ["a"];
$b = $_GET ["b"];
$bewerking = $_GET ["bewerking"];
        
echo "<b><h2>rekenmachine</h2></b><br>";

echo "gekozen waarde voor variabelen a = ". $a. " en b = ". $b."<br><br>";

switch ($bewerking){
    
    case "optellen":
      echo $a. " + ". $b. " = ";
      echo $a + $b."<br>";  
        break;
    
    case "aftrekken":
        echo $a. " - ". $b. " = ";
        echo $a - $b."<br>";
        break;
    
    case "vermenigvuldigen":
        echo $a. " x ". $b. " = ";
        echo $a * $b."<br>";
        break;
    
    case "delen":
        echo $a. " : ". $b. " = ";
       echo $a / $b."<br>";
       break;
   
    case "macht":
        echo $a. " tot de macht ". $b. " = ";
       echo $a ** $b."<br>";
       break;
   
       case "wortel":
        echo $a. "de machts wortel ". $b. " = ";
       echo pow ($b, 1/$a)."<br>";
       break;
}




?> 