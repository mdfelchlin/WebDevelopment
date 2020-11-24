<?php
require "vendor/autoload.php"; 

class CensusAPI {
    
    public static function fetchCities() {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://data.wa.gov/resource/ktqk-i4iw.json');
        $result = json_decode($res->getBody()->getContents(), true);
        return $result;
    }

}