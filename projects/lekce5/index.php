<?php
require "InterfaceDownloader.php";
require "Downloader.php";
require "City.php";
require "AllCities.php";

if (isset($_GET) && !empty($_GET)) {
    require('zkouska.php');
}
else {
    require('form.html');
}