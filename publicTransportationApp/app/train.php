<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train extends Model
{
    protected $table = 'trains';
    protected $primaryKey = 'train_num';
    protected $fillable = ['train_num','train_name','route_name','speed_type','gps_module_id','total_receivable_seat','available_date','train_location_id'];

    public function train_route(){
        return $this->belongsToMany('App\train_route');
    }
    public function day(){
        return $this->belongsToMany('App\day');
    }
    public function train_staff_member(){
        return $this->belongsToMany('App\train_staff_member');
    }
    public function department(){
        return $this->belongsTo('App\department','foreign_key');
    }
    public function Train_seat(){
        return $this->hasMany('App\Train_seat');
    }
    public function Train_shedule(){
        return $this->hasMany('App\Train_shedule');
    }
    public function train_complain(){
        return $this->hasMany('App\train_complain');
    }
}
