<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seat_plane extends Model
{
    protected $table = 'seat_planes';
    protected $primaryKey = 'seat_plane_id';
    protected $fillable = ['seat_plane_id','seat_plane_url'];

    public function bus(){
        return $this->hasMany('App\bus');
    }
}
