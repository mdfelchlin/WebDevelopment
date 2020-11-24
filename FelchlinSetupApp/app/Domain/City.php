<?php

namespace App\Domain;

class City {

    public $cityName, $cityPopulation;

    public function __construct($cityName, $cityPopulation) {
        $this->cityName = $cityName;
        $this->cityPopulation = intval($cityPopulation);
    }

    public function __toString() {
        return "{$this->cityName} ({$this->cityPopulation})";
    }

}

?>