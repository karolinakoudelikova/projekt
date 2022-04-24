<?php

require "../lekce5/InterfaceDownloader.php";
require "../lekce5/FileGetContentsDownloader.php";
require "../lekce5/AllCities.php";

class AllCitiesTest extends \PHPUnit\Framework\TestCase {
    public function testTable(){
        $downloader = new FileGetContentsDownloader();
        $allCities = new AllCities($downloader);
        $table = $allCities->createTable("Jihočeský");
        $this->assertStringContainsString("<tr>",$table);
    }

    public function testCityCount(){
        $downloader = new FileGetContentsDownloader();
        $allCities = new AllCities($downloader);
        $table = $allCities->createTable("Jihočeský");
        $this->assertGreaterThan(100,$allCities->vybranoMest);
    }
}