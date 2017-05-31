<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class day extends Model
{
    protected $table = 'days';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];

    public function train(){
        return $this->belongsToMany('App\train');
    }
    public function test(){
        return $this->belongsToMany('App\test');
    }
    public function bus(){
        return $this->belongsToMany('App\bus');
    }
}
