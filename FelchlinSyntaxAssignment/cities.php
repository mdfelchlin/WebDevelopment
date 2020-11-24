<?php
require "CensusAPI.php";
require "CityAnalyzer.php";

echo "Population report for 2010";
echo "\n--------------------------\n\n";
$citiesJson = CensusAPI::fetchCities();
$analyzer = new CityAnalyzer($citiesJson);
$analyzer->printHighestPopulatedCities();
$analyzer->printLowestPopulatedCities();
echo "\n\nRandom City: {$analyzer->randomCity()}";

?>