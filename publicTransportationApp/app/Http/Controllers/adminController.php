<?php

namespace App\Http\Controllers;
use App\admin;
use App\Passenger;
use App\bus_complain;
use App\bus;
use App\train;
use App\train_complain;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use ValidatesRequests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use App\Http\Requests;

class adminController extends Controller
{
//    public function getDashboard(){
//          return view('index');
//        //$data = Passenger::all()->count();
//        //$bus_complain_count = bus_complain::all()->count();
//
//       // return view('index')->with('data',$data)
//         //   ->with('bus_complain_count',$bus_complain_count);
//
//    }
    public function getDashboard(){
        //  return view('index');
        $passenger_count = Passenger::all()->count();
        $bus_complain_count = bus_complain::all()->count();
        $train_complain_count = train_complain::all()->count();
        $train = train::all()->count();
        $bus = bus::all()->count();
        return view('index')
            ->with('bus_complain_count',$bus_complain_count)
            ->with('train_complain_count',$train_complain_count)
            ->with('passenger_count',$passenger_count)
            ->with('train',$train)
            ->with('bus',$bus);
    }

//    public function getLogin(){
//        return view('login');
//    }

    //web page
//    protected function validator(array $data){
//        return Validator::make($data,[
//            'email' => 'required|email|unique:admins',
//            'first_name' =>'required|max:100',
//        ]);
//    }



    public function postSignUp(Request $request)
    {
        $this->validate($request,[
             'email' => 'required|email|unique:admins',
             'phone_number' =>'required|max:10',
             'user_name' => 'required|max:10',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' =>'required|min:4',
//            'password' =>'required|min:4|confirmed',
            'confirm_password' => 'required|min:4',
         ]);

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        $phone_number = $request['phone_number'];
        $user_name = $request['user_name'];
        $password = bcrypt($request['password']);
        //$password = $request['password'];

        $admin = new admin();
        $admin->first_name = $first_name;
        $admin->last_name = $last_name;
        $admin->email = $email;
        $admin->username = $user_name;
        $admin->mobile_num = $phone_number;
        $admin->password = $password;

        $admin->save();

        Auth::login($admin);
        return redirect()->route('index');

    }

    public function postSignIn(Request $request){


        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']])) {
//            $id = Auth::id();
//            $user = Auth::user();
//
//            echo "$id";
//            echo "$user";

            return redirect()->route('index');

//        }elseif(Auth::attempt(['username'=>$request[' '],'password'=>$request[' ']])){
//            echo '<script language="javascript">';
//            echo 'alert("Enter UserName and Password")';
//            echo '</script>';
//            return view('login');


        }else{

            echo '<script language="javascript">';
            echo 'alert("Enter Correct UserName and Password")';
            echo '</script>';
            return view('login');

            //return login()->alert()->success('You have been logged out.', 'Good bye!');
           // $request->session()->flash('alert-success','UserName and password not match!');

           // return redirect()->route('login');
           // echo "User Name and Password does not match!";
            //alert()->success('User Name and Password does not match!', 'Error!');
//
        //   return redirect()->route('login');
            //  $//id=Auth::admin()->id;
            //  $id = Auth::id();
            // echo "$id";
        }
    }

    public function getAccount(){
        return view('AdminProfile',['user'=> Auth::user()]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function getadmindata(){
        $admindata = DB::table('admins')
            ->select('first_name','username','mobile_num','id')
            ->get();
        return view('AdminProfile')->with('admindata', $admindata);
    }
    public function postSaveAccount(Request $request){
        //$admin = Auth::user();
        $file = $request->file('image');
        $filename = time().'.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }
        return redirect()->route('AdminProfile');
    }
    public function getUserimage($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }




}
