<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\station;
use Illuminate\Support\Facades\DB;

class RailwayStationController extends Controller
{
    public function stationdetail (Request $request){

        //$bus_stop= busstopContoller::create(['longitude' => $request->longitude, 'latitude' => $request->latitude]);
        $bhname = $request['stationname'];
        $routenum = $request['routenumber'];
        $long = $request['longitude'];
        $lat = $request['latitude'];


        $station = new station();
        $station->location_name = $bhname;
        $station->route_num = $routenum;
        $station->longitude = $long;
        $station->latitude = $lat;


        $station->save();


        return redirect()->back();
    }

    public function getrailwaystation()
    {

        //  $schedule_data = bus_shedule::all();
        $station = DB::table('stations')->get();

        return view('railwaystation')->with('station',$station);
        //    ->with('bus_complain_count',$bus_complain_count);


    }
    public function deletestation($station){

        $value = station::find($station);
        $value->forceDelete();
        return redirect()->route('railwaystation')->with(['message'=>'Successfully Deleted!']);

    }

}
