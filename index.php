<?php
/**
 * Created by PhpStorm.
 * User: Karolina
 * Date: 22/07/19
 * Time: 23:36
 */

echo "IT works";
echo "<br>NASRAT";
echo "<br>Ahoj, moje jméno je" . " " . "Karolina";

$jmeno = "Karolina";
$vek = "22";

echo $jmeno;
echo $vek;
echo "<br>Je mi " . $vek . " let";

$jmena = ["Maruška", "Petr", "Alena", "Lenka"];
echo "<br> Moje spoluzacka se jmenuje: " . $jmena[2];

echo "<br> Můj kamarád se jmenuje: " . $jmena[1];

$jmena [4]= "Lukáš";

echo "<br>Petrův kamarád se jmenuje: " . $jmena[4];

$a = 5;
$b = 5;
$c = $a + $b;

echo "<br>Výsledek čísla a a čísla b je " . $c;
$den = ["Pondělí", "Úterý","Středa"];

echo "<br>Dnes je: " . $den[0];

$den [3] = "Čtvrtek";
echo $den[3];

$uzivatel = ["jmeno" => "Karolina" , "prijmeni" => "Koudelikova"];

echo $uzivatel ["prijmeni"];
echo "<br>Moje jméno je: " . $uzivatel ["jmeno"];
echo "<br>Moje příjmení je: " .  $uzivatel ["prijmeni"];

if ($a>$b) {

    echo "<br>Pravda";
}

    else {
echo "Nepravda";

    }

if ($b>$a) {
    echo "ANO";
}
elseif ($a==$b) {
    echo "NE";
}
else {
    echo "NEVIM";
}

for ($i=1; $i<=30; $i++) {
    echo $i . "<br>";
}
while ($a < 20) {
    echo $a;
    $a = $a + 4;
}
do {
    echo $b;
    $b = $b + 2;
}
while ($b<4);

 $jmena = ["Petr", "Martin", "Lucie"];

 foreach ($jmena as $jmeno) {
     if ($jmeno == "Martin") {
         break;
     }
 echo $jmeno;
 }

$jmena = ["Petr","Lenka"];
echo $jmena[0];




