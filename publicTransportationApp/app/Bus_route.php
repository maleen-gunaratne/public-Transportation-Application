<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_route extends Model
{

    protected $table = 'Bus_routes';
    protected $primaryKey = 'bus_route_id';
    protected $fillable = ['bus_route_id','bus_route_name'];

    public function bus(){
        return $this->hasMany('App\bus');
    }
    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }
    public function bus_stop(){
        return $this->belongsToMany('App\bus_stop');
    }
}
