<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    public $timestamps = false;
    protected $table = 'buses';
    protected $primaryKey = 'bus_num';
    protected $fillable = ['bus_num','name','route_name','route_num','speed_type','condition_type','insurance','gps_module_id','seat_plane_id','num_of_seat','num_of_reseavable_seat','owner_id','bus_location_id','schedule_id'];


    public function bus_shedule(){
        return $this->belongsTo('App\bus_shedule');
    }
    public function bus_reserve_detail(){
        return $this->hasMany('App\bus_reserve_detail');
    }
    public function Owner(){
        return $this->belongsTo('App\Owner','foreign_key');
    }
    public function Bus_route(){
        return $this->belongsTo('App\Bus_route','foreign_key');
    }
    public function seat_plane(){
        return $this->belongsTo('App\seat_plane','foreign_key');
    }

    public function day(){
        return $this->belongsToMany('App\day');
    }

}