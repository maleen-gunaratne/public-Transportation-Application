<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_type extends Model
{
    protected $table = 'train_types';
    protected $primaryKey = 'type_id';
    protected $fillable = ['type_id','type_name','class_id'];

    public function class1(){
        return $this->belongsTo('App\class1','foreign_key');
    }
    public function Train_seat(){
        return $this->hasMany('App\Train_seat');
    }
}
