<?php
function downloadDecodeData () {
    $json = file_get_contents('https://data.cesko.digital/obce/1/obce.json');
    $obj = json_decode($json, true);

    return $obj;
}

function createTable($kraj){
    $data = downloadDecodeData();
    $vypis = '';
    $pocetMest = 0;

    foreach ($data["municipalities"] as $mesto) {

        if ($mesto["adresaUradu"]["kraj"] === $kraj) {

            $pocetMest = $pocetMest+1;

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

    if ($pocetMest === 0) {
        $output = "Byl vybrán špatný kraj!";
    }
    else {
        $output = '<table border="2" style="margin-left: auto; margin-right: auto;">';
        $output .= $vypis;
        $output .= '</table>';
    }

    return $output;
}

