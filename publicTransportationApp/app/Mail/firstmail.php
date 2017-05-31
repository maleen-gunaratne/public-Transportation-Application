<?php

namespace App\Mail;
use App\sendcomplain;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\DB;
//use DB;

use Illuminate\Contracts\Queue\ShouldQueue;

class firstmail extends Mailable
{
    use Queueable, SerializesModels;

    public $Complains;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(sendcomplain $Complains)
    {
        $this-> Complains = $Complains;
    }
//    public function __construct()
//    {
//
//    }
    /**
     * Build the message.
     *
     * @return $this
     */
//
    public function build()
    {

       return $this->view('sendMail');

    }
}
