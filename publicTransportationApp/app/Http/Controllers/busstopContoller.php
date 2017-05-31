<?php

namespace App\Http\Controllers;

use App\bus_stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class busstopContoller extends Controller
{

    public function stopdetail (Request $request){

        //$bus_stop= busstopContoller::create(['longitude' => $request->longitude, 'latitude' => $request->latitude]);
        $bhname = $request['bholtname'];
        $routenum = $request['broutenumber'];
        $long = $request['longitude'];
        $lat = $request['latitude'];


        $bus_stop = new bus_stop();
        $bus_stop->locationname = $bhname;
        $bus_stop->route_num = $routenum;
        $bus_stop->longitude = $long;
        $bus_stop->latitude = $lat;


        $bus_stop->save();


        return redirect()->back();
    }

    public function getbusstop()
    {

        //  $schedule_data = bus_shedule::all();
        $busstop = DB::table('bus_stops')->get();
        return view('busstoplocation')->with('busstop',$busstop);
        //    ->with('bus_complain_count',$bus_complain_count);


    }


}
