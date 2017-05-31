<?php

namespace App\Http\Controllers;
use App\train_shedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class trainschedulContoller extends Controller
{
    public function viewTrainSchedule()
    {
        return view('train-schedule');
    }
    public function tscheduldetail(Request $request)
    {
        //$routename = $request['troutename'];
        $routenum = $request['troutenumber'];
        $arrival = $request['tarrivaltime'];
        $departure = $request['tdeparture'];
        $trainname = $request['trainname'];
        $date = $request['date'];
        $origin = $request['torigin'];
        $destination = $request['tdestination'];

        $train_shedule = new train_shedule();
       // $train_shedule->route_name = $routename;
        $train_shedule->train_name = $trainname;
        $train_shedule->route_num = $routenum;
        $train_shedule->arrival_time = $arrival;
        $train_shedule->departure_time = $departure;
        $train_shedule->date = $date;
        $train_shedule->origin = $origin;
        $train_shedule->destination = $destination;
        $train_shedule->save();


        return redirect()->back();
    }

    public function deletetrainschedule($trainschedule){

        $value = train_shedule::find( $trainschedule);
        $value->forceDelete();
        return redirect()->route('train-schedule')->with(['message'=>'Successfully Deleted!']);

    }

    public function getTrainSchedule()
    {

        //  $schedule_data = bus_shedule::all();
        $schedule_data = DB::table('train_shedules')->get();
        return view('train-schedule')->with('schedule_data', $schedule_data);
    }

    public function searchtrain(Request $request){
        $search = $request->input('search_code1');
        $schedule_data = DB::table('train_shedules')->where('route_num','like',"$search")->get();
        return view('train-schedule')->with('schedule_data', $schedule_data);

    }
}