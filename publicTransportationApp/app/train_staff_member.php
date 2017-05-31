<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_staff_member extends Model
{
    protected $table = 'train_staff_members';
    protected $primaryKey = 'tstfm_id';
   // protected $fillable = ['tstfm_id','tstfm_name','designation','tstfm_dob','nic_num','tstfm_licence_num'];

    public function train(){
        return $this->belongsToMany('App\train');
    }
    public function train_staff_role(){
        return $this->belongsTo('App\train_staff_role','foreign_key');
    }
}
