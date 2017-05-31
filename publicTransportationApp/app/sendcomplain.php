<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sendcomplain extends Model
{

    protected $table = 'sendcomplains';
    protected $primaryKey = 'id';
    protected $fillable = ['content','e_mail','bus_number','image_url','bus_id'];


    public function Owner(){
        return $this->hasMany('App\Owner');
    }
    public function admin(){
        return $this->hasMany('App\admin');
    }
    public function bus_complain(){
        return $this->hasMany('App\bus_complain');
    }


}
