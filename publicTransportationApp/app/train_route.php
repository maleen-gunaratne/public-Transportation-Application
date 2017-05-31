<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_route extends Model
{
    protected $table = 'train_routes';
    protected $primaryKey = 'train_route_id';
    protected $fillable = ['train_route_id','train_route_name','train_location_id'];

    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }
    public function train(){
        return $this->belongsToMany('App\train');
    }
    public function station(){
        return $this->belongsToMany('App\station');
    }
}
