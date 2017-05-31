<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_staff_role extends Model
{
    protected $table = 'train_staff_roles';
    protected $primaryKey = 'role_id';
    protected $fillable = ['role_id','role_name'];

    public function train_staff_member(){
        return $this->hasMany('App\train_staff_member');
    }
}
