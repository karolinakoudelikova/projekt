<?php
/**
 * Created by PhpStorm.
 * User: Karolina
 * Date: 27/07/19
 * Time: 10:24
 */


$os=Array("Linux", "Windows", "Solaris", "FreeBSD");
sort($os);
print_r($os);

echo "Jmena:";
$jmena = ["Alena", "Petr", "Michaela"];
foreach ($jmena as $jmeno) {

    echo $jmeno;
}

$pravda="Software is like sex... it's better when it's free";
$pole=explode(" ", $pravda);
foreach ($pole as $cast) {
    echo "$cast<br>\n";
}

$pozdrav="Ahoj jak se mas";
$pole=explode(" ", $pozdrav);
foreach ($pole as $cast){

echo "$cast\n";
}

define("CENZUROVANO", "[ !!! Censored !!!]");

function cenzuruj($text)
{
    $SpatnaSlova = Array("Windows", "Microsoft", "databáze");
    $RozdelText = explode(" ", $text);
    foreach ($RozdelText as $TestovaneSlovo) {
        foreach ($SpatnaSlova as $SpatneSlovo) {
            if ($TestovaneSlovo==$SpatneSlovo) {
                $text = str_replace($SpatneSlovo, CENZUROVANO, $text);
            }
        }
    }
    return $text;
}

echo cenzuruj("Nejlepší softwarová firma na světě je Microsoft");
echo cenzuruj(" Její operační systém Windows je ukázkou výkonu, stability a bezpečnosti.");