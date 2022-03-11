<?php
require "../../vendor/autoload.php";
require "InterfaceDownloader.php";
require "AllCities.php";


if (isset($_GET) && !empty($_GET)) {
    require('zkouska.php');
}
else {
    require('form.html');
}