<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\bus_complain;

class testcomplainController extends Controller
{
    public function deletecomplain($complain_id){


        $value = bus_complain::where('id', $complain_id)->first();
        $value->delete();
        return redirect()->route('feedback')->with(['message'=>'Successfully Deleted!']);


    }
}
