<?php
use \Curl\Curl;
class CurlDownloader implements InterfaceDownloader {
    public function download($url) {
        $curl = new Curl();
        $curl->get('https://data.cesko.digital/obce/1/obce.json');
        return $curl->response;
    }

}
