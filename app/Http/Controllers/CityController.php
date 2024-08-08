<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;


class CityController extends Controller
{
    public function showCityDetails($cityName)
    {
        $city = City::where('name', $cityName)->with('state.country')->first();
        if($city)
        {
            $state = $city->state;
            $country = $state->country;

            return view ('frontend/city-details', compact('city', 'state','country'));
        
        }
        else{
            return view('frontend/city-not-found');
        }
    }
}
