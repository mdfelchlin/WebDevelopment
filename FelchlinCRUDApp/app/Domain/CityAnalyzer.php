<?php

namespace App\Domain;

use Illuminate\Support\Collection;
use vendor\autoload;
use App\Domain\API\CensusAPI;
use App\City;

class CityAnalyzer {

    public function __construct() {
        $cityCollection = collect(CensusAPI::fetchCities());

        foreach ($cityCollection as $city) {
            $elCity = City::firstOrCreate([
                'name' => $city['place_name'],
                'state' => $city['location_1_state'],
                'population_2010' => $city['total_population_2010'],
                'population_rank' => $city['population_rank_2010']
            ]);
        }
    }
    
}

?> 