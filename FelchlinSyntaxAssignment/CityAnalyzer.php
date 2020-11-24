<?php
require "City.php";
require "vendor/autoload.php";
use Illuminate\Support\Collection;

class CityAnalyzer {

    public $washingtonCities;

    public function __construct() {
        $cityCollection = collect($cities);

        $washingtonCities = $cityCollection 
        -> map(function($city) {
            return new City($city['place_name'], $city['total_population_2010']);
        });

        $theWashingtonCities = $washingtonCities->sortByDesc('cityPopulation');
        
        $this->washingtonCities = $theWashingtonCities->values()->all();
    }

    public function printHighestPopulatedCities() {
        echo "\n\n10 highest populated cities\n";
        echo "---------------------------\n";
        
        for($x = 0; $x < 10; $x++) {
            echo $this->washingtonCities[$x]->__toString();
            echo "\n";
        }
    }

    public function printLowestPopulatedCities() {
        echo "\n\n10 lowest populated cities\n";
        echo "---------------------------\n";

        for($x = (count($this->washingtonCities) - 1); $x > (count($this->washingtonCities)) - 11; $x--) {
            echo $this->washingtonCities[$x]->__toString();
            echo "\n";
        }
    }

    public function randomCity() {
        $randomNumber = rand(0, (count($this->washingtonCities)-1));
        $city = ($this->washingtonCities[$randomNumber]->__toString());
        return "{$city}\n\n";
    }
}

?>