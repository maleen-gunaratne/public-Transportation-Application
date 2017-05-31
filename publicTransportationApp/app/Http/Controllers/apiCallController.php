<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\admin;

class apiCallController extends Controller
{
    public function index()
    {
        $results = array();
        //  $admins = DB::table('admins')->get();
        $admins = admin::all();
        foreach ($admins as $admin) {
            $results['data'] = ['id' => $admin->id, 'first_name' => $admin->first_name, 'last_name' => $admin->last_name, 'email' => $admin->email
                , 'username' => $admin->username, 'password' => $admin->password, 'mobile_num' => $admin->mobile_num, 'profile_pic_url' => $admin->profile_pic_url
                , 'created_at' => $admin->created_at, 'updated_at' => $admin->updated_at];
        }
        $results['message']= 'Retrieve Admin Data';
        $results['status']= true;
        return $results;
    }
    public function saveAdminDetails(Request $request)
    {
        $id = $request->input('id');
        $first_name = $request->input('first_name');
        $gender = $request->input('last_name');
        $designation = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        $mobile_num = $request->input('mobile_num');
        $profile_pic_url = $request->input('profile_pic_url');

        $admins = new admin();

        $admins->id =$id;
        $admins->first_name = $first_name;
        $admins->gender = $gender;
        $admins->designation = $designation;
        $admins->username =$username;
        $admins->password =$password;
        $admins->mobile_num =$mobile_num;
        $admins->profile_pic_url =$profile_pic_url;

        $admins->save();

    }
    public function Adminlogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $admins = DB::table('admins')->get();
        foreach ($admins as $admin) {

            if ($admin->name == $username || $admin->password == $password) { //Change Permission Accordingly

                return $username;

            }


        }
    }
    /* update quary
    public function update_available_Product(Request $request)
     {
         $id = $request->id;
         DB::table('availableproducts')
             ->where('aid', $id)
             ->update(['unitPrice' => $request->newprice,
                 'quantity' => $request->newquantity,
                 'producedDate' => $request->pDate,
                 'expireDate' => $request->eDate,
                 'description' => $request->description
             ]);
     }*/
}




