<?php

$hoogte = $_GET["hoogte"];

echo "<b><h2>* kerstboomrekenmachine *</h2></b><br>";

echo "* aantal kerstballen<br>";
echo ceil (17**(1/2)/20 * $hoogte)."<br><br>";

echo "* lengte van lichtjes<br>";
echo ($hoogte * 3.14)." cm.<br><br>";

echo "* lengte engelenhaar<br>";
echo ((13 * 3.14) / 8) * $hoogte." cm.<br><br>";

echo "* hoogte piek<br>";
echo ($hoogte / 10)." cm.";


?> 