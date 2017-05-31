<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus_complain extends Model
{
    protected $table = 'bus_complains';
    protected $primaryKey = 'id';

    public function bus(){
        return $this->belongsTo('App\bus','foreign_key');
    }

}
