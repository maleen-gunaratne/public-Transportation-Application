<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class1 extends Model
{
    protected $table = 'class1s';
    protected $primaryKey = 'class_id';
    protected $fillable = ['class_id','class_name','seat_plan_id','num_of_seat','class_type','category_type'];

    public function train_type(){
        return $this->hasMany('App\train_type');
    }
}
