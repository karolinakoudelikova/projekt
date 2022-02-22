<?php
/**
 * Created by PhpStorm.
 * User: Karolina
 * Date: 24/08/19
 * Time: 12:10
 */


define("BROWSER", "Chrome");
echo BROWSER;


$pokoju = 2;
$pokoju_po_zmene=$pokoju++;
echo $pokoju;



function PocetDnu ($mesic, $rok)
{
    return cal_days_in_month(CAL_GREGORIAN, $mesic, $rok);
}
$vek="86";
$castka = 8-2;
$jmeno="Karol";
echo "<br>fuck" . " you";
echo "<br>Ahoj, moje jméno je " . $jmeno;
echo " a je mi " . $vek . " let" . " a dnes jsem utratil " . $castka . " Kč";

echo "první řádek\ndruhý řádek";

$jmena = [1=>"Petr", "Pavel", "Maruška"];

echo $jmena[2];
$dnesnidatum = date("j. n. Y");
echo $dnesnidatum;

$stavuctu = 1200;
$vyber = $stavuctu>1000 ? 5000 : 2000;//ternární operátor - podobné jako podmínka, ale lehčí
echo "<br>" . $vyber;
$a = 13; $b = 10;

if ($a<$b) {
    echo "Yes";
}
else {
    echo "<br>NOOO";
}

for ($i = 13; $i > 5; $i--) {
    echo $i;
} // cyklus for

$q = 1;
while($q < 10){
    echo $q;
    $q = $q + 2;
}// cyklus while

echo "<br>";

$w = 5;
do {
    echo $w;
    $w = $w + 1;
} while ($w <4);
//cyklus do while

$jmena = ["Pepa", "Alena", "Petr"];
rsort($jmena);
foreach ($jmena as $jmeno) {
    if ($jmeno == "Alena"){
       break;
    }
        echo $jmeno;
}

for($i = 0; $i < count($jmena); $i++) {
    echo $jmena[$i];

}
//print_r($jmena);

sort($jmena);

function nadruhou ($x,$y) {
    return $x - $y;
}
//echo nadruhou (3,8);

echo rand (5,15);
echo "<br>";
echo date ("j. n. Y");
echo count ($jmena);