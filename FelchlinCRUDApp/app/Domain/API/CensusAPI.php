<?php
namespace App\Domain\API;

use vendor\autoload;
use GuzzleHttp\Client;

class CensusAPI {
    
    public static function fetchCities() {
        $client = new Client();
        $res = $client->request('GET', 'http://data.wa.gov/resource/ktqk-i4iw.json');
        $result = json_decode($res->getBody()->getContents(), true);
        return $result;
    }

}