<link rel="stylesheet" href="styly.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
</html>

<?php

$json = file_get_contents('https://data.cesko.digital/obce/1/obce.json');
$obj = json_decode($json, true);


echo "Kraj: ";
echo $_GET["kraj"];
echo "<br>";

$pocetMest = 0;
echo ('<table border="2" style="margin-left: auto; margin-right: auto;">');

foreach ($obj["municipalities"] as $mesto) {

    if ($mesto["adresaUradu"]["kraj"] === $_GET["kraj"])
    {

        $pocetMest = $pocetMest+1;


        echo ('<tr>');
        echo ('<td>');
        echo $mesto["hezkyNazev"];
        echo ("</td>");
        echo ("<td>");
        echo $mesto["datovaSchrankaID"];
        echo ("</td>");
        echo ("</tr>");
    }
}
echo('</table>');
if ($pocetMest === 0) {
    echo "Byl vybrán špatný kraj!";
}