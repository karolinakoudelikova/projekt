<?php

if (isset($_GET) && !empty($_GET)) {
    require('vypis_mest.php');
}
else {
    require('vypis_mest.html');
}