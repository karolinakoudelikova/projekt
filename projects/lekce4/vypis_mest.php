<link rel="stylesheet" href="styly.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
</html>

<?php
require('functions.php');
echo "Kraj:" . $_GET["kraj"];
echo createTable($_GET["kraj"]);

