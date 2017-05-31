<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'department_id';
    protected $fillable = ['department_id','department_name','Phone_num','email'];

    public function train(){
        return $this->hasMany('App\train');
    }
    public function admin(){
        return $this->belongsToMany('App\admin');
    }
}
