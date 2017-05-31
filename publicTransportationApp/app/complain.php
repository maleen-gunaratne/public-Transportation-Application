<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    protected $table = 'complains';
    protected $primaryKey = 'complain_id';
    protected $fillable = ['complain_id','vehicle_id','content','image_url','passenger_id','admin_id'];

    public function test(){
        return $this->belongsTo('App\test', 'foreign_key');
    }
//    public function Passenger(){
//        return $this->belongsTo('App\Passenger', 'foreign_key');
//    }
    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }

}
