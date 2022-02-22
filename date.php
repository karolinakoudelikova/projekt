<?php

require_once("funkce.php");

$format = "d.m.Y H:i:s";
$time = time() - 60*60;
echo date($format, $time);

echo "<hr>";

$time = strtotime("last day of this month");
echo date("d.m.Y H:i:s", $time);