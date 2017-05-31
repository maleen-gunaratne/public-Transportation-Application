<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_stop extends Model
{
    protected $table = 'bus_stops';
    protected $primaryKey = 'bus_stop_id';
    protected $fillable = ['bus_stop_id','locationname','route_num','longitude','latitude'];

    public function bus_route(){
        return $this->belongsToMany('App\bus_route');
    }
}
