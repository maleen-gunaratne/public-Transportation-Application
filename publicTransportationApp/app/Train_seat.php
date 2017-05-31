<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train_seat extends Model
{
    protected $table = 'Train_seats';
    protected $primaryKey = 'id';
    protected $fillable = ['id','t_seat_num','type_id','train_num'];

    public function Passenger(){
        return $this->belongsToMany('App\Passenger');
    }
    public function train(){
        return $this->belongsTo('App\train');
    }
    public function train_type(){
        return $this->belongsTo('App\train_type','foreign_key');
    }
}
