<?php
//
//namespace App\Http\Controllers;
//
//use App\bus_complain;
//use App\Bus_route;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//
//class busComplainController extends Controller
//{
//    public function getAllBusRoutes() // checked
//    {
//
//        $bus_routes = Bus_route::select('bus_route_name')->groupBy('bus_route_name')->get();
//        foreach ($bus_routes as $bus_route) {
//            $results['data'] = ['id' => $bus_route->bus_route_name,
//            ];
//        }
//        $results['message']= 'Retrieve bus routes';
//        $results['status']= true;
//        return $results;
//    }
//
//    public function BusInSelectedRoutes(Request $request) // checked
//    {
//
//        $bus_route_name = $request->input('bus_route_name');
//        $bus_route_id = Bus_route::select('bus_route_id')->where('bus_route_name', '=', $bus_route_name);
//        $bus = Bus::select("*")->where('bus_route_id', '=', $bus_route_id);
//        foreach ($bus as $buses) {
//            $results['data'] = ['bus_num' => $buses->bus_num ,];
//        }
//    }
//
//
//    public function saveBusComplain(Request $request)
//    {
//        //android app
//        // $complain_id = $request->input('complain_id'); //do not concern about foreign key
//        $vehicle_id = $request->input('bus_num');
//        $content = $request->input('content');
//        $image_url = $request->input('image_url');
//        $bus_route_name = $request->input('bus_route_name');
//        $complain_id = $request->input('complain_id');
//
//
//        $bus_complain = new bus_complain();
//
//        //  $admins->passenger_id =
//        $bus_complain->content = $content;
//        $bus_complain->image_url = $image_url;
//        $bus_complain->vehicle_id = $vehicle_id;
//        $bus_complain->admin_id = Auth::id();
//        $bus_complain->complain_id=$complain_id;
//
//        $bus_complain->save();
//
//
//
//    }
//}
//


namespace App\Http\Controllers;

use App\bus_complain;
use App\Bus_route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;



class busComplainController extends Controller
{
    public function getAllBusRoutes() // checked
    {

        $bus_routes = Bus_route::select('bus_route_name')->groupBy('bus_route_name')->get();
        foreach ($bus_routes as $bus_route) {
            $results['busRoutes'][] = ['bus_route_name' => $bus_route->bus_route_name,];
        }

        $results['message'] = 'Retrieve bus routes';
        $results['status'] = true;
        return $results;
    }

    public function BusInSelectedRoutes(Request $request) // checked
    {

        $bus_route_name = $request->input('bus_route_name');
        $BusInRoutes = DB::table('bus_routes')
            ->join('buses', 'bus_routes.bus_route_id', '=', 'buses.route_id')
            ->select('bus_routes.bus_route_name','buses.bus_num')
            ->where('bus_routes.bus_route_name', '=', $bus_route_name)
            ->get();


        $results['buslist']=$BusInRoutes;
        $results['message']= 'Retrieve bus routes';
        $results['status']= true;
        return $results;



    }





    public function saveBusComplain(Request $request)
    {
        $passenger_id=null;
        //android app
        $vehicle_id = $request->input('bus_num');
        $content = $request->input('content');
        $image_url = $request->input('image_url');
        $bus_route_name = $request->input('bus_route_name');
        $token = $request->input('token');
        //   DB::table('passengers')
        //    $passenger_id =Passenger::select('passenger_id')->where('token', '=', $token);
        //   $passenger = Passenger::select("*")->where('token', '=', $token)->get();
        $passenger = DB::table('passengers')->select('*')->where('token', '=', $token)->get();
        foreach ($passenger as $passengers) {
            $passenger_id =$passengers->passenger_id;
        }

        $bus_complain = new bus_complain();


        $bus_complain->content = $content;
        $bus_complain->image_url = $image_url;
        $bus_complain->bus_number = $vehicle_id;
        $bus_complain->admin_id = Auth::id();
        $bus_complain->passenger_id = $passenger_id;
        $bus_complain->route_name = $bus_route_name;
        //  $bus_complain->complain_id=$complain_id;


        $bus_complain->save();




    }

    ///web API    //////////////////////////////////////////////////////////////

    public function getbuscomplain(){

        $busfeedback = DB::table('bus_complains')->get();
        return view('BusComplain')->with('busfeedback',$busfeedback);
    }

//    public function deletecomplain($complain_id){
//
//
//        $value = bus_complain::find($complain_id);
//        //if($value != null) {
//            $value->delete();
//            return redirect()->route('feedback')->with(['message' => 'Successfully Deleted!']);
//        //}
//       // return redirect()->route('feedback')->with(['message'=> 'Wrong ID!!']);
//
//
//    }
    //running code previous
     public function deletecomplain($complain_id){


        $value = bus_complain::where('id', $complain_id);
        if($value != null) {
            $value->delete();
            return redirect()->route('feedback')->with(['message' => 'Successfully Deleted!']);
        }
        return redirect()->route('feedback')->with(['message'=> 'Wrong ID!!']);


    }
    public function getcomplain()
    {
        $feedback = DB::table('bus_complains')
            ->select('content','bus_number','bus_id','image_url','id')
            ->get();

        return view('feedback')->with('feedback',$feedback);
        //    ->with('bus_complain_count',$bus_complain_count);



    }

}

