<?php
require "../../vendor/autoload.php";
require "../lekce5/AllCities.php";

use PHPUnit\Framework\TestCase;
final class AllCities extends TestCase {
    public function createTable() {
        $AllCities = new AllCities();

        $this->assertContains("<tr>", $AllCities->createTable());

    }
}

