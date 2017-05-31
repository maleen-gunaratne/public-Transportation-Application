<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bus_stop;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class busListController extends Controller
{

    public function getBusList(Request $request)
    {

       $starting_longitude = $request->input('starting_longitude');
        $starting_latitude = $request->input('starting_latitude');
            //  $ending_longitude = $request->input('ending_longitude');
           //   $ending_latitude = $request->input('ending_latitude');

              $starting_location_bus_list = DB::table('bus_stops')
                  ->join('bus_route_ins', 'bus_stops.bus_stop_id', '=', 'bus_route_ins.bus_stop_id')
                  ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'bus_route_ins.bus_route_id')
                  ->join('buses', 'bus_routes.bus_route_id', '=', 'buses.route_id')
                  ->select('buses.bus_num')
                 ->where('bus_stops.longitude', '=', $starting_longitude)
                  ->where('bus_stops.latitude', '=', $starting_latitude)
                // ->where('bus_stops.longitude', '=', $ending_longitude)
                // ->where('bus_stops.latitude', '=', $ending_latitude)
                  ->get();

        //$starting_longitude = $request->input('starting_longitude');
          //    $starting_latitude = $request->input('starting_latitude');
              $ending_longitude = $request->input('ending_longitude');
              $ending_latitude = $request->input('ending_latitude');

              $ending_location_bus_list = DB::table('bus_stops')
                  ->join('bus_route_ins', 'bus_stops.bus_stop_id', '=', 'bus_route_ins.bus_stop_id')
                  ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'bus_route_ins.bus_route_id')
                  ->join('buses', 'bus_routes.bus_route_id', '=', 'buses.route_id')
                  ->select('buses.bus_num')
                  //  ->where('bus_stops.longitude', '=', $starting_longitude)
                 //  ->where('bus_stops.latitude', '=', $starting_latitude)
                  ->where('bus_stops.longitude', '=', $ending_longitude)
                  ->where('bus_stops.latitude', '=', $ending_latitude)
                  ->get();






$current = Carbon::now();
$currentDate = $current->toDateString();
        echo $currentDate;
$Schedule_bus_list = DB::table('bus_schedules')
             // ->where('bus_num', '=', $bus_num)//refer the table
             ->select('bus_number')
              ->where('date', '=', $currentDate)
            ->get();
     //  return $Schedule_bus_list;



$range = 0.027;
$near_bus_list =  DB::table('bus_location_exes')
   // bus_location_ex::select('bus_num')
   ->select('bus_number')
    ->where('longitude', '<', $starting_longitude + $range)
    ->where('latitude', '<', $starting_latitude + $range)
    ->get();
      //  $finalQuery = $location_bus_list->union($near_bus_list)->get();


        $finalQuery = $starting_location_bus_list->union($ending_location_bus_list)->union($Schedule_bus_list)->union($near_bus_list);
//return $finalQuery ;
    //   return $finalQuery;

        $bus_num ='null';
        foreach ($finalQuery as $final) {
           // $bus_num =;
            $bus_details[] = DB::table('buses')->select('*')->where('bus_num', '=', $final->bus_num)->get();
        }

       // result['bus_list']= $bus_details;
        $result= $bus_details;

        return $result;
}
}
