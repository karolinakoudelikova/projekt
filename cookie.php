<?php
/**
 * Created by PhpStorm.
 * User: Karolina
 * Date: 27/07/19
 * Time : 17:47
 */
$platnost = time() + 1*60;
if (!isset($_COOKIE["id"])) setcookie("id", 1);
if (!isset($_COOKIE["cas"])) setcookie ("cas", time());

if (isset($_COOKIE["pocet_navstev"])) {
    setcookie("pocet_navstev", ++$_COOKIE["pocet_navstev"], $platnost);
}
else {
    setcookie("pocet_navstev", 1, $platnost);
}

echo "<h1>Vítejte na naší stránce</h1>";
echo "<p>Vaše údaje jsou:";
echo "<BR>ID: ".$_COOKIE["id"];
echo "<BR>Čas přihlášení: ".date("j.n.Y G:i:s",$_COOKIE["cas"]);
echo "<BR>Počet navštívených stránek po přihlášení: ".$_COOKIE["pocet_navstev"];

