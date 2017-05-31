<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//not use
class bus_shedule extends Model
{
    public $timestamps = false;
    protected $table = 'bus_shedules';
    protected $primaryKey = 'b_schedule_id';
    protected $fillable = ['b_schedule_id','origin','date','destination','route_num','route_name','departure_time','arrival_time','passenger_id','schedule_id'];

    public function bus(){
        return $this->hasOne('App\bus', 'foreign_key');
    }
    public function bus_staff_member(){
        return $this->belongsToMany('App\bus_staff_member');
    }
    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }
}
