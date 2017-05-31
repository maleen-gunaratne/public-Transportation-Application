<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function searchowner(Request $request){
        $bus_number = $request->input('bus_number');
        $ComplainsOwner= DB::table('bus_complains')
            ->join('buses', 'bus_complains.bus_number', '=', 'buses.bus_num')
            ->join('owners', 'owners.own_id', '=', 'buses.owner_id')
            ->select('bus_complains.bus_number', 'owners.e_mail')

            ->get();
        if ($bus_number != 'all'){
            $ComplainsOwner->where('bus_number', '=', $bus_number);
        }
        foreach ($ComplainsOwner as $ComplainsOwners) {
            return $ComplainsOwners->e_mail;
        }
//        $search = $request->search_code;
//        $ownermail = DB::table('owners')->where('e_mail', 'like' ,"$search")->get();
//        return view('');
    }
}
