<?php
class Downloader implements InterfaceDownloader {

    public function download($url) {
        return file_get_contents($url);
    }

}