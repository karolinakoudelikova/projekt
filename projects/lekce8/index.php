<?php
require "InterfaceDownloader.php";
require "FileGetContentsDownloader.php";
require "AllCities.php";


$downloader = new FileGetContentsDownloader();
$allCities = new AllCities($downloader);

define('SQL_HOST', 'localhost');
define('SQL_DBNAME', 'regions');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

$dsn = 'mysql:dbname=' . SQL_DBNAME . ';host=' . SQL_HOST . ';charset=utf8';
$user = SQL_USERNAME;
$password = SQL_PASSWORD;

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

if (isset($_GET) && !empty($_GET)) {
    require('zkouska.php');
}
else {
    require('form.html');
}