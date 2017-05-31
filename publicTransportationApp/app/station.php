<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class station extends Model
{
    protected $table = 'stations';
    protected $primaryKey = 'station_id';
    protected $fillable = ['station_id','station_name','longitude','latitude'];

    public function train_schedule(){
        return $this->belongsToMany('App\train_schedule');
    }
    public function train_route(){
        return $this->belongsToMany('App\train_route');
    }
}
