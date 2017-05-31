<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notController extends Controller
{

    public function notification(){
        $notification = array(
            'message' => 'Thanks! We shall get back to you soon.',
            'alert-type' => 'success'
        );
        session()->set('notification',$notification);
        return view('notification');
    }



}
