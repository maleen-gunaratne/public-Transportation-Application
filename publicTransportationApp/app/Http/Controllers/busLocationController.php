<?php

namespace App\Http\Controllers;
use App\bus_location_ex;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class busLocationController extends Controller
{

    public function busLogin(Request $request)
    {
        $state = 'unsuccess';
        $bus_num = $request->input('bus_num');

        $bus_location = new bus_location_ex();
        $bus_location->bus_number =$bus_num;
        $bus_location->save();

        $bus_password = $request->input('password');

        $owner = Owner::select("*")->get();
        foreach ($owner as $owners) {

            if ($owners->password == $bus_password) {
                $state = 'success';
            }
        }
        return $state;
    }
    public function saveLocationFromToGPSModule(Request $request)
    {
        //From bus App
        $bus_num = $request->input('bus_num');
        //  $token = $request->token;
        DB::table('bus_location_exes')
            ->where('bus_number', $bus_num)
            ->update(['longitude' => $request->longitude,
                'latitude' => $request->latitude,

            ]);

    }

    public function getBusLocationFormDB()
    {
        //To Passenger App
        $results = array();
        //  $admins = DB::table('admins')->get();
        $bus_locations = bus_location_ex::all();
        foreach ($bus_locations as $bus_location) {
            $results['gps_data'] []= ['bus_num' => $bus_location->bus_number, 'longitude' => $bus_location->longitude, 'latitude' => $bus_location->latitude
            ];
        }
        $results['message']= 'Retrieve Gps_Data';
        $results['status']= true;
        return $results;
    }
}
