<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_location_ex extends Model
{

    protected $table = 'bus_location_exes';
    protected $primaryKey = 'location_id';
    protected $fillable = ['location_id','longitude','latitude'];

    public function bus()
    {
        return $this->belongsTo('App\bus');
    }
}
