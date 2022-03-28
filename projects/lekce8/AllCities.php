<?php

class AllCities {

    public $celkemMest = 0;
    public $vybranoMest = 0;
    public $cities = [];
    public $regions = [];
    public $downloader;
    public $pdo;

    public function __construct(InterfaceDownloader $downloader, PDO $pdo) {
        $this->downloader = $downloader;
        $this->pdo = $pdo;
        $this->loadData();
    }


    //Zavoláme downloader, vytvoříme proměnnou json
    public function downloadAndDecodeData() {
        $json = $this->downloader->download('https://data.cesko.digital/obce/1/obce.json');
        $jsonDecode = json_decode($json, true);

        return $jsonDecode;
    }

    //
    public function loadData() {
        $jsonDecode = $this->downloadAndDecodeData();

        foreach ($jsonDecode["municipalities"] as $mesto) {
            $this->cities[] = $mesto;
            $this->celkemMest++;
            if (!in_array($mesto["adresaUradu"]["kraj"], $this->regions)){
                $this->regions[] = $mesto["adresaUradu"]["kraj"];
            }
          }

        sort($this->regions);
    }

    public function getRegionOptions() {
        $vypis = "";
        foreach ($this->regions as $region) {
            $vypis .= " <option> $region </option>";
        }
        return $vypis;
    }
    public function logDataToDatabase() {
        // Připravení dotazu
        $dotaz = $this->pdo->prepare("INSERT into  seznam_mest(ip_adress,region, result_count) VALUE(?,?,?)");
// Vykonání dotazu
        $vysledek = $dotaz->execute(array(
            $_SERVER['REMOTE_ADDR'],$_GET["kraj"],$this->vybranoMest
        ));
    }

    public function createTable($kraj) {
        $vypis = '';

        foreach ($this->cities as $mesto) {

            if ($mesto["adresaUradu"]["kraj"] === $kraj) {

                $this->vybranoMest++;

                $vypis .= ('<tr>');
                $vypis .= ('<td>');
                $vypis .= $mesto["hezkyNazev"];
                $vypis .= ("</td>");
                $vypis .= ("<td>");
                $vypis .= $mesto["datovaSchrankaID"];
                $vypis .= ("</td>");
                $vypis .= ("</tr>");
            }

        }
        $this->logDataToDatabase();

        //if ($pocetMest === 0) {
            $output = "Byl vybrán špatný kraj!";
        //}
        //else {
            $output = '<table border="2" style="margin-left: auto; margin-right: auto;">';
            $output .= $vypis;
            $output .= '</table>';
        //}
        return $output;
}




}