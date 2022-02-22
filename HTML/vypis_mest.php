<?php

$json = file_get_contents('https://data.cesko.digital/obce/1/obce.json');
$obj = json_decode($json, true);


echo "Kraj: ";
echo $_GET["kraj"];
echo "<br>";

$pocetMest = 0;

foreach ($obj["municipalities"] as $mesto) {
    if ($mesto["adresaUradu"]["kraj"] === $_GET["kraj"]) {

        $pocetMest = $pocetMest+1;
        echo $mesto["hezkyNazev"];
        echo "-";
        echo $mesto["datovaSchrankaID"];
        echo "<br>";
    }
}
if ($pocetMest === 0) {
    echo "Byl vybrán špatný kraj!";
}