<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'Passengers';
    protected $primaryKey = 'passenger_id';
    protected $fillable = ['passenger_id','name','dob','nic','mobile_num','e_mail','username','password','Gender','profile_pic_url'];

    public function community(){
        return $this->hasMany('App\community');
    }
//    public function complain(){
//        return $this->hasMany('App\complain');
//    }
    public function bus_route(){
        return $this->belongsToMany('App\bus_route');
    }
    public function bus_schedule(){
        return $this->belongsToMany('App\bus_schedule');
    }
    public function complain(){
        return $this->belongsToMany('App\complain');
    }

    public function train_route(){
        return $this->belongsToMany('App\Passenger');
    }
    public function train_schedule(){
        return $this->belongsToMany('App\train_schedule');
    }
    public function Train_seat(){
        return $this->belongsToMany('App\Train_seat');
    }

}
