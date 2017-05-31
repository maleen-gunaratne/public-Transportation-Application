<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'tests';
    protected $primaryKey = 'schedule_id';
    protected $fillable = ['schedule_id','origin','destination','route_num','route_name','departure_time','arrival_time'];

    public function complain(){
        return $this->hasMany('App\complain');
    }
    public function day(){
        return $this->belongsToMany('App\day');
    }

}
