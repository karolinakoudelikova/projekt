<?php

function secti($spoluzaci) {
	$soucet = 0;

	foreach ($spoluzaci as $bilance) {
		$soucet = $soucet + $bilance;
	}

	return $soucet;
}

$spoluzaci = [
	"Honza" => 100,
	"Pavel" => 400,
	"Karolína" => 200,
];

echo secti($spoluzaci);