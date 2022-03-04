<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\{Country,State,District};

class CountryStateDistrictController extends Controller
{
    public function index()
    {
        $data['countries'] = Country::get(["country_name","country_idid"]);
        return view('country-state-city',$data);
    }
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
                    ->get(["state_name","state_id"]);
        return response()->json($data);
    }
    public function getDistrict(Request $request)
    {
        $data['cities'] = District::where("state_id",$request->state_id)
                    ->get(["city_name","city_id"]);
        return response()->json($data);
    }
}
