<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_route_in extends Model
{
    protected $table = 'bus_route_ins';
    protected $primaryKey = 'id';
    protected $fillable = ['id','bus_route_id','bus_stop_id'];
}
