<?php

namespace App\Http\Controllers;
use App\bus;
use App\Owner;
//use App\bus_route;
use App\bus_staff_member;
use Illuminate\Http\Request;

class BusController extends Controller
{
//    public function BusRegistration()
//    {
//        return view('BusRegistration');
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function busdetail(Request $request){
        $owner_name = $request['Name'];
        $phone_no = $request['No'];
        $nic_nu = $request['Nicnu'];
        $e_mail = $request['Email'];
        $permit_no = $request['permit'];
        $owner_id = $request['Ownid'];
        //$owner_pw = $request['password'];

        $stf_name = $request['stfname'];
        $stf_dob = $request['stfdob'];
        $designation = $request['designation'];
        $stf_licen = $request['licennu'];
       // $stf_id = $request['stfid'];
        $stf_nic = $request['stfnic'];

        $bus_no = $request['busno'];
        $name = $request['busname'];
        $route_name = $request['routename'];
        $speed_type = $request['speedtype'];
        $condition_type = $request['condition'];
        $insurance = $request['insurance'];
        $gps_module_id = $request['gps'];
        $seat_plane_id = $request['seatplaneid'];
        $Nu_of_seat = $request['seat'];
        $Nu_of_reseavable_seat = $request['reseavable'];
        //$licence = $request[''];


        $owner = new Owner();
        $owner->own_name = $owner_name;
        $owner->phone_nu = $phone_no;
        $owner->nic_nu = $nic_nu;
        $owner->e_mail = $e_mail;
        $owner->permit_nu = $permit_no;
        $owner->own_id = $owner_id;
        //$owner->password = $owner_pw;
        $owner->save();

        $bus_staff_member = new bus_staff_member();
        //$bus_staff_member->bus_no = $bus_no;
        $bus_staff_member->bstfm_name = $stf_name;
        $bus_staff_member->bstfm_dob = $stf_dob;
        $bus_staff_member->designation = $designation;
        $bus_staff_member->bstfm_licence_num = $stf_licen;
        //$bus_staff_member->stf_id = $stf_id;
        $bus_staff_member->nic_num = $stf_nic;
        $bus_staff_member->save();

//        $owner=Owner::where('e_mail','=',$request['e_mail'])->get()->first();
//        $id=$owner->id;


        $bus = new bus();
        $bus->bus_num = $bus_no;
        $bus->name = $name;
        $bus->route_name = $route_name;
        $bus->speed_type = $speed_type;
        $bus->condition_type = $condition_type;
        $bus->insurance = $insurance;
        $bus->gps_module_id = $gps_module_id;
        $bus->seat_plane_id = $seat_plane_id;
        $bus->num_of_seat = $Nu_of_seat;
        $bus->num_of_reseavable_seat = $Nu_of_reseavable_seat;
        $bus->owner_id = $owner_id;
        //$bus->licence_num = licence;
        $bus->save();










        //dd('hhbhbhbh');
        //dd($request->all);
       return redirect()->back();
}
//public function store(Request $request){
  //  Bus::BusRegistration($request->all());
    //return 'success';
    //return $request->all();


}