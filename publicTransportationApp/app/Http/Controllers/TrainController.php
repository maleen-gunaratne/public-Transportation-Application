<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\train;
use App\train_staff_member;
use App\class1;
//use App\train_type;
//use App\class3;
class TrainController extends Controller
{

    public function traindetail(Request $request){
        //dd('hhbhbhbh');
        $t_name = $request['trainname'];
        $t_no = $request['trainno'];
        $route_name = $request['routename'];
        $speed_type = $request['speedtype'];
        $gps_module_id = $request['gps'];
        $receivable_seat = $request['receivable_seat'];
        $days = $request['days'];


        $class_name_1 = $request['class_name_1'];
        $seat_plane_id_1 = $request['seatplaneid_1'];
        $seat_nu_1 = $request['nu_of_seat_1'];
        $con_type_1 = $request['condition_1'];
        $class_type_1 = $request['category_1'];


        $class_name_2 = $request['class_name_2'];
        $seat_plane_id_2 = $request['seatplaneid_2'];
        $seat_nu_2 = $request['nu_of_seat_2'];
        $con_type_2 = $request['condition_2'];
        $class_type_2 = $request['category_2'];

        $class_name_3 = $request['class_name_3'];
        $seat_nu_3 = $request['nu_of_seat_3'];
        $seat_plane_id_3 = $request['seatplaneid_3'];


        $stf_name = $request['stfname'];
        $stf_dob = $request['stfdob'];
        $stf_nic = $request['nicn'];
        $designation = $request['designation'];
        $stf_licen = $request['licennu'];

        //$class-id = $request[''];

        $train = new train();
        $train->train_num = $t_no;
        $train->train_name = $t_name;
        $train->route_name = $route_name;
        $train->speed_type = $speed_type;
        $train->gps_module_id = $gps_module_id;
        $train->total_receivable_seat = $receivable_seat;
        $train->available_date = $days;
        $train->save();

        $class1 = new class1();
        $class1->num_of_seat = $seat_nu_1;
        $class1->class_name = $class_name_1;
        $class1->seat_plan_id = $seat_plane_id_1;
        $class1->class_type = $class_type_1;
        $class1->category_type = $con_type_1;

        $class1->num_of_seat = $seat_nu_2;
        $class1->class_name = $class_name_2;
        $class1->seat_plan_id = $seat_plane_id_2;
        $class1->class_type = $class_type_2;
        $class1->category_type = $con_type_2;

        $class1->num_of_seat = $seat_nu_3;
        $class1->class_name = $class_name_3;
        $class1->seat_plan_id = $seat_plane_id_3;
        $class1->save();

        $train_staff_member = new train_staff_member();
        $train_staff_member->tstfm_name = $stf_name;
        $train_staff_member->tstfm_dob = $stf_dob;
        $train_staff_member->designation = $designation;
        $train_staff_member->tstfm_licence_num = $stf_licen;
        $train_staff_member->nic_num = $stf_nic;
        $train_staff_member->save();



//        $class2 = new class2();
//        $class2->train_no = $t_no;
//        $class2->nu_of_seat = $seat_nu_2;
//        $class2->condition_type = $con_type_2;
//        $class2->category_type = $catry_type_2;
//        $class2->seat_plane_id = $seat_plane_id_2;
//
//        $class3 = new class3();
//        $class3->train_no = $t_no;
//        $class3->nu_of_seat = $seat_nu_3;
//        $class3->seat_plane_id = $seat_plane_id_3;











        //$class2->save();
       // $class3->save();

        //dd($request->all);
        return redirect()->back();
    }
}
