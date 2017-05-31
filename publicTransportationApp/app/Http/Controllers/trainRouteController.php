<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\station;
use App\TrainStstionInRoute;
class trainRouteController extends Controller
{
    public function getTrainStations(){
        $results = array();

        $train_stations = station::all();
        foreach ($train_stations as $train_station) {
            $results['data'] = ['train_station_id' => $train_station->station_id,'station_name' => $train_station->location_name ,'longitude' => $train_station->longitude, 'latitude' => $train_station->latitude,];
        }
        $results['message']= 'Retrieve train_station Data';
        $results['status']= true;
        return $results;
    }
    public function getTrainStationsInRoute(){
        $results = array();

        $train_stations_in_route = TrainStstionInRoute::all();
        foreach ($train_stations_in_route as $train_station_in_route) {
            $results['data'] = ['$$train_station_in_route_id' => $train_station_in_route->id, 'train_station_id' => $train_station_in_route->train_station_id, 'train_route_id' => $train_station_in_route->train_route_id,];
        }
        $results['message']= 'Retrieve train_station_in_route Data';
        $results['status']= true;
        return $results;
    }
}
