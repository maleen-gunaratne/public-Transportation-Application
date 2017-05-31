<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\firstmail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\sendcomplain;

class mailController extends Controller
{
    public function sendMail(Request $request)
    {
        $bus_id = $request['bus_id'];
        $ComplainsOwner = DB::table('buses')
            ->join('bus_complains', 'buses.id', '=', 'bus_complains.bus_id')
            ->join('owners', 'owners.own_id', '=', 'buses.owner_id')
            ->select('owners.e_mail','bus_complains.content','bus_complains.bus_id','bus_complains.bus_number','bus_complains.image_url')
            ->where('bus_complains.bus_id', '=' ,$bus_id )
            ->get();


        foreach ($ComplainsOwner as $ComplainsOwners) {

            $sendcomplain = new sendcomplain();

            $sendcomplain->content = $ComplainsOwners->content;
            $sendcomplain->e_mail =  $ComplainsOwners->e_mail;
            $sendcomplain->bus_number = $ComplainsOwners->bus_number;
            $sendcomplain->image_url = $ComplainsOwners->image_url;
            $sendcomplain->bus_id = $ComplainsOwners->bus_id;

            $sendcomplain->save();
            $Complains = sendcomplain::findOrFail($ComplainsOwners->bus_id);

            Mail::to($ComplainsOwners->e_mail)->send(new firstmail($Complains));

            return 'email sent';

        }
    }

    public function imagesave(){
        $image = DB::table('bus_complains')
            ->select('content','bus_number','bus_id','image_url','id')
            ->get();
        //$file_name = $request['id'];
        $file_name = $image->id.'.jpg';
        //return $file_name;

        if($image){
            Storage::disk('local')->put($file_name, File::get($image));
        }
        return redirect()->route('feedback');
        //return view('feedback')->with('image',$image);

    }
    public function getimage($file_name){
        $image = Storage::disk('local')->get($file_name);
        return new Response($image, 200);
    }

}



