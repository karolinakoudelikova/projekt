<?php

use \Curl\Curl;
class AllCities {

    public $celkemMest = 0;
    public $vybranoMest = 0;
    public $cities = [];
    public $regions = [];

    public function __construct() {
        $this->loadData();
    }

    //Zavoláme downloader, vytvoříme proměnnou json
    public function downloadAndDecodeData() {
        $curl = new Curl();
        $curl->get('https://data.cesko.digital/obce/1/obce.json');
        return $curl->response;
    }

    //
    public function loadData() {
        $jsonDecode = $this->downloadAndDecodeData();

        foreach ($jsonDecode->municipalities as $mesto) {
            $this->cities[] = $mesto;
            $this->celkemMest++;
            if (!in_array($mesto->adresaUradu->kraj, $this->regions)){
                $this->regions[] = $mesto->adresaUradu->kraj;
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

    public function createTable($kraj) {
        $vypis = '';

        foreach ($this->cities as $mesto) {

            if ($mesto->adresaUradu->kraj === $kraj) {

                $this->vybranoMest++;

                $vypis .= ('<tr>');
                $vypis .= ('<td>');
                $vypis .= $mesto->hezkyNazev;
                $vypis .= ("</td>");
                $vypis .= ("<td>");
                $vypis .= $mesto->datovaSchrankaID;
                $vypis .= ("</td>");
                $vypis .= ("</tr>");
            }
        }

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