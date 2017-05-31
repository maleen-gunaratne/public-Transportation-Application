<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class admin extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;


    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','email','username','password','mobile_num','profile_pic_url'];


    public function community(){
        return $this->belongsToMany('App\community');
    }
    public function Owner(){
        return $this->belongsToMany('App\Owner');
    }
    public function department(){
        return $this->belongsToMany('App\department');
    }
}
