<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_shedule extends Model
{
    protected $table = 'train_shedules';
    protected $primaryKey = 't_schedule_id';
    protected $fillable = ['t_schedule_id','origin','destination','route_num','route_name','departure_time','arrival_time','passenger_id','schedule_id','train_num'];

    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }
    public function train(){
        return $this->belongsTo('App\train','foreign_key');
    }
    public function station(){
        return $this->belongsToMany('App\station');
    }
}
