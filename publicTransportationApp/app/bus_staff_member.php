<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_staff_member extends Model
{
    protected $table = 'bus_staff_members';
    protected $primaryKey = 'bstfm_id';
    protected $fillable = ['bstfm_id','stfm_role','designation','bstfm_name','bstfm_dob','nic_num','bstfm_licence_num','stfm_role'];

    public $timestamps = false;
    public function bus_schedule(){
        return $this->belongsToMany('App\bus_schedule');
    }
    public function bus_staff_role(){
        return $this->belongsTo('App\bus_staff_role','foreign_key');
    }
}
