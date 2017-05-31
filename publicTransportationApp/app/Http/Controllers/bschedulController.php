<?php

namespace App\Http\Controllers;
use App\bus_schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class bschedulController extends Controller
{
    public function scheduldetail(Request $request){

//        $routename= $request['routename'];
        $routenum = $request['routenumber'];
        $arrival = $request['arrivaltime'];
        $departure = $request['departure'];
        $date = $request['date'];
        $origin = $request['origin'];
        $destination = $request['destination'];
        $busnum = $request['busnumber'];

        $bus_shedule = new bus_schedule();
//        $bus_shedule->route_name = $routename;
        $bus_shedule->route_num = $routenum;
        $bus_shedule->bus_number = $busnum;
        $bus_shedule->arrival_time = $arrival;
        $bus_shedule->departure_time = $departure;
        $bus_shedule->date = $date;
        $bus_shedule->origin = $origin;
        $bus_shedule->destination = $destination;

        $bus_shedule->save();
        return redirect()->back();
    }

    public function viewBusSchedule(){
        return view('bus-schedule');
    }

    public function getBusSchedule()
    {
        $bus_schedule_data = DB::table('bus_schedules')->get();
        return view('bus-schedule')->with('bus_schedule_data',$bus_schedule_data);
    }

    public function deletebusschedule($bus_schedule_id){

        $value1 = bus_schedule::find( $bus_schedule_id);
      //  if($value1 != null){
        $value1->forceDelete();
        return redirect()->route('bus-schedule')->with(['message'=>'Successfully Deleted!']);
       // }
       // return redirect()->route('bus-schedule')->with(['message'=> 'Wrong ID!!']);
        //$value->delete();

    }
    public function searchbus(Request $request){
        $search = $request->input('search_code');
        $bus_schedule_data = DB::table('bus_schedules')->where('route_num','like',"$search")->get();
        return view('bus-schedule')->with('bus_schedule_data',$bus_schedule_data);

    }

}
