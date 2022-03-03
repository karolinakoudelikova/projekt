<html>
<link rel="stylesheet" href="styly.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
</html>

<?php
/*class Clovek {
    public $jmeno;
    public $prijmeni;

    public function __construct($jmeno,$prijmeni){
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
    }
    public function pozdrav() {
        echo "Ahoj já jsem" . $this->jmeno . $this->prijmeni;
    }


}
$Pavel = new Clovek("Pavel", "Novák");
//$Pavel->jmeno = "Pavel";
//$Pavel->prijmeni = "Novák";
$Jana = new Clovek("Jana", "Pěkná");


$Pavel->pozdrav();
$Jana->pozdrav();


echo "<br>";*/



echo "Kraj:" . $_GET["kraj"];
$allCities = new AllCities();
echo $allCities->createTable($_GET["kraj"]);
echo $allCities->pocetMest;
