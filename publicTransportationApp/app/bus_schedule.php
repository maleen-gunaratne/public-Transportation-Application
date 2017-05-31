<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_schedule extends Model
{
    public $timestamps = false;
    protected $table = 'bus_schedules';
    protected $primaryKey = 'bus_schedule_id';
    protected $fillable = ['bus_schedule_id','origin','destination','date','route_num','route_name','departure_time','arrival_time','passenger_id','schedule_id'];

    public function bus(){
        return $this->belongsTo('App\bus', 'foreign_key');
    }
    public function bus_staff_member(){
        return $this->belongsToMany('App\bus_staff_member');
    }
    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }

}
