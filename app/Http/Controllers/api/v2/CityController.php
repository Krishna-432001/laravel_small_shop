<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\City;

class CityController extends Controller
{
    public function findStateAndCountryByCity($cityName)
    {
        $city = City::where('name', $cityName)->with('state.country')->first();
        if($city)
        {
            $state = $city->state;
            $country = $state->country;

            return response ()->json([
                'city' =>$city,
                'state' => $state,
                'country' =>$country,
            ]);
        
        }
        else{
            return response()->json(['error'  => 'City not found'],404);
        }
    }
}
