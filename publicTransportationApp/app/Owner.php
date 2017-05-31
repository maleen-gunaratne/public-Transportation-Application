<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    protected $primaryKey = 'own_id';
    protected $fillable = ['own_id','own_name','nic_nu','phone_nu','e_mail','permit_nu'];

    public $timestamps = false;
    public function bus(){
        return $this->hasMany('App\bus');
    }
    public function admin(){
        return $this->belongsToMany('App\admin');
    }
}
// $table->integer('own_id')->primary();
//$table->string('own_name');
//$table->integer('nic_nu');
//$table->integer('phone_nu');
//$table->string('e_mail')->unique();
//$table->integer('permit_nu');