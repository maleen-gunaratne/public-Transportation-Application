<?php

namespace App\Http\Controllers;
use App\test;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testControl extends Controller
{
    public function testdetail(Request $request){
        //dd('hhbhbhbh');
        $t_name = $request['trainname'];
        $t_no = $request['trainno'];
        $route_name = $request['routename'];
        $speed_type = $request['speedtype'];
        $condition_type = $request['conditiontype'];
        $gps_module_id = $request['gps'];
        $seat_plane_id = $request['seatplaneid'];

        $owner_name = $request['Name'];
        $phone_no = $request['No'];
        $e_mail = $request['Email'];
        $permit_no = $request['permit'];
        $owner_id = $request['Ownid'];


        $test = new test();
        $test->t_no = $t_no;
        $test->t_name = $t_name;
        $test->route_name = $route_name;
        $test->speed_type = $speed_type;
        $test->condition_type = $condition_type;
        $test->gps_module_id = $gps_module_id;
        $test->seat_plane_id = $seat_plane_id;

        $owner = new Owner();
        $owner->own_name = $owner_name;
        $owner->phone_no = $phone_no;
        $owner->e_mail = $e_mail;
        $owner->permit_no = $permit_no;
        $owner->own_id = $owner_id;



        $test->save();
        $owner->save();

        //dd($request->all);
        return redirect()->back();
    }

}
