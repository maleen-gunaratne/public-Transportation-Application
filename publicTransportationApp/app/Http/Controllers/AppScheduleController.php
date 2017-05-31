<?php

namespace App\Http\Controllers;

use App\train_shedule;
use App\bus_shedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppScheduleController extends Controller
{
    public function getTrainSchedule(Request $request){

        $starting_location = $request['starting_location'];
        $ending_location = $request['ending_location'];
        $journey_date = $request['journey_date'];

        $TrainSchedule=
            DB::table('train_shedules')
                ->where('origin', '=', $starting_location)
                ->where('destination', '=', $ending_location)
                ->where('date','=',$journey_date)
                ->get();
        $result['data']=$TrainSchedule;
        return $result;
    }
    public function getBusSchedule(Request $request){

        $starting_location = $request['starting_location'];
        $ending_location = $request['ending_location'];
        $journey_date = $request['journey_date'];


        $BusSchedule=
               DB::table('bus_shedules')
            ->where('origin', '=', $starting_location)
            ->where('destination', '=', $ending_location)
                   ->where('date','=',$journey_date)
                   ->get();
        $result['data']=$BusSchedule;
        return $result;
    }
}
