<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_staff_role extends Model
{
    protected $table = 'bus_staff_roles';
    protected $primaryKey = 'role_id';
    protected $fillable = ['role_id','role_name'];

    public function bus_staff_member(){
        return $this->hasMany('App\bus_staff_member');
    }
}
