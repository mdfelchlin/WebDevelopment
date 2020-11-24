<?php
namespace App\Domain;

use Illuminate\Support\Collection;
use vendor\autoload;
use App\Domain;
use App\Domain\API\CensusAPI;

class CityAnalyzer {

    public $washingtonCities;

    public function __construct() {
        $cityCollection = collect(CensusAPI::fetchCities());

        $washingtonCities = $cityCollection 
        -> map(function($city) {
            return new City($city['place_name'], $city['total_population_2010']);
        });

        $theWashingtonCities = $washingtonCities->sortByDesc('cityPopulation');
        
        $this->washingtonCities = $theWashingtonCities->values()->all();
    }

    public function getHighestPopulatedCities() {
        $highestCityPop = collect();
        
        for($x = 0; $x < 10; $x++) {
            $highestCityPop -> push($this->washingtonCities[$x]);
        }

        return $highestCityPop;
    }

    public function getLowestPopulatedCities() {
        $lowestCityPop = collect();

        for($x = (count($this->washingtonCities) - 1); $x > (count($this->washingtonCities)) - 11; $x--) {
            $lowestCityPop -> push($this->washingtonCities[$x]);
        }
        
        return $lowestCityPop;
    }

    public function getRandomCity() {
        $randomNumber = rand(0, (count($this->washingtonCities)-1));
        return $this->washingtonCities[$randomNumber];
    }
    
}

?> 