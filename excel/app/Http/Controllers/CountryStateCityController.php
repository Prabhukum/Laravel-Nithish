<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CountryStateCityController extends Controller
{
    public function getCountries(){
        $countries = DB::table('countries')->get();

        return $countries;
    }
    public function getStates(Request $request){
        $states = DB::table('states')->where('country_id',$request->country_id)->get();

        if(count($states)>0){
            return response()->json($states);
        }
    }
    public function getCities(Request $request){
        $cities = DB::table('cities')->where('state_id',$request->state_id)->get();

        if(count($cities)>0){
            return response()->json($cities);
        }
    }
}
