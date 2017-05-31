<?php

namespace App\Http\Controllers;
use App\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class passengerController extends Controller
{
    public function passengerRegistration(Request $request)   //Android App
    {

        $name = $request['name'];
        $user_name = $request['user_name'];
        $mobile_num = $request['phone_number'];
        $password = $request['password'];//dob nic,email, gender
        /*$p = new OAuthProvider();
        $t = $p->generateToken(16);*/


        $Passenger = new Passenger();

        $Passenger->name = $name;
        $Passenger->username = $user_name;
        $Passenger->password = $password;
        $Passenger->mobile_num = $mobile_num;

        $Passenger->save();


    }

    public function updatePassenger(Request $request)
    {
        $token = $request->token;
        DB::table('passengers')
            ->where('token', $token)
            ->update(['dob' => $request->dob,
                'e_mail' => $request->e_mail,
                'nic' => $request->nic,
                'Gender' => $request->gender,
                'profile_pic_url' => $request->profile_pic_url
            ]);
    }


    public function PassengerLoginDBCheck(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');

        // $Passengers = DB::table('passengers')->get();
        $passenger = Passenger::select("*")->get();
        foreach ($passenger as $passengers) {

            if ($passengers->username == $username && $passengers->password == $password) {


                $token = strval(random_int(10000000, 100000000));

                $id = $passengers->passenger_id;
                DB::table('passengers')
                    ->where('passenger_id', $id)
                    ->update(['token' => $token,
                    ]);
                $passenger_token = Passenger::select('token')
                    ->where('passenger_id', $id)
                    ->get();
//                    foreach ($passenger_token as $passenger_tokens) {
//                      //  return $passenger_tokens->token;
//                        $results['token'] = ['token' => $passenger_tokens->token];
//
//                        //if not any token pass there is error in username & password so it must identify by the android app
//                    }
                foreach ($passenger_token as $passenger_tokens) {
                    $results = ['token' => $passenger_tokens->token];
                    // return $passenger_tokens->token;
                }
                return $results;

            }


        }
    }
}




