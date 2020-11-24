<?php

use Illuminate\Support\Facades\Route;
use App\Domain\CityAnalyzer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CityPopulations', function() {
    $cityAnalyzer = new CityAnalyzer();

    $highestPopCities = $cityAnalyzer -> getHighestPopulatedCities();
    $lowestPopCities = $cityAnalyzer -> getLowestPopulatedCities();
    $randomPopCity = $cityAnalyzer -> getRandomCity();

    return view('population') 
                            -> with('highestPopCities', $highestPopCities)
                            -> with('lowestPopCities', $lowestPopCities)
                            -> with('randomPopCity', $randomPopCity);
});