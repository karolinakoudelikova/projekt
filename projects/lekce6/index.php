<?php
require "../../vendor/autoload.php";
require "InterfaceDownloader.php";
require "AllCities.php";
require "CurlDownloader.php";


if (isset($_GET) && !empty($_GET)) {
    require('zkouska.php');
}
else {
    require('form.html');
}