<?php

namespace App\Http\Controllers;
use App\bus_stop;
use App\station;
use App\bus_route_in;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\admin;
class busStopController extends Controller
{
    public function getBusStops(){
        $results = array();

        $train_stations = station::all();
        foreach ($train_stations as $train_station) {
            $results['trainStations'][] = ['train_station_id' => $train_station->station_id,'station_name' => $train_station->location_name ,'longitude' => $train_station->longitude, 'latitude' => $train_station->latitude,];
        }




        $bus_stops = DB::table('bus_stops')->get();
       // $bus_stops = bus_stop::all();
        foreach ($bus_stops as $bus_stop) {
            $results['busStops'][] = ['bus_stop_id' => $bus_stop->bus_stop_id,'location_name' => $bus_stop->locationname, 'longitude' => $bus_stop->longitude, 'latitude' => $bus_stop->latitude,];
        }

        $results['message']= 'Retrieve bus_stop Data';
        $results['status']= true;
        return $results;
    }

    public function getBusStopsInRoute(){
        $results = array();
        // $admins = DB::table('bus_stops')->get();
        $bus_stops_in_route = bus_route_in::all();
        foreach ($bus_stops_in_route as $bus_stop_in_route) {
            $results[] = ['$bus_stop_in_route_id' => $bus_stop_in_route->id, 'bus_stop_id' => $bus_stop_in_route->bus_stop_id, 'bus_route_id' => $bus_stop_in_route->bus_route_id,];
        }
        $results['message']= 'Retrieve bus_stop_in_route Data';
        $results['status']= true;
        return $results;
    }
    public function deletebusstop($busstop){

        $value = bus_stop::find($busstop);
        $value->forceDelete();
        return redirect()->route('busstoplocation')->with(['message'=>'Successfully Deleted!']);

    }



}
