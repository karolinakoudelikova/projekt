<?php
/**
 * Created by PhpStorm.
 * User: Karolina
 * Date: 27/07/19
 * Time: 20:50
 */

session_start();
if(!isset($_SESSION["id"])) $_SESSION["id"]=1;
if(!isset($_SESSION["cas"])) $_SESSION["cas"]=time();
if(isset($_SESSION["stranek"])) ++$_SESSION["stranek"]; else $_SESSION["stranek"]=1;

echo "<h1>Vítejte na naší stránce</h1>";
echo "<p>Vaše údaje jsou:";
echo "<BR>ID: ".$_SESSION["id"];
echo "<BR>Čas přihlášení: ".date("j.n.Y G:i:s",$_SESSION["cas"]);
echo "<BR>Počet navštívených stránek po přihlášení: ".$_SESSION["stranek"];






