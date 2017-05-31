<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_reserve_details extends Model
{
    protected $table = 'bus_reserve_details';
    protected $primaryKey = 'id';
    protected $fillable = ['id','seat_id','is_reserved','bus_number'];

    public function bus(){
        return $this->belongsTo('App\bus', 'foreign_key');
    }
}
