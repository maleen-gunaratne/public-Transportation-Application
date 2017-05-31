<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_location extends Model
{
    protected $table = 'train_locations';
    protected $primaryKey = 'train_location_id';
    protected $fillable = ['train_location_id','longitude','latitude'];
}
