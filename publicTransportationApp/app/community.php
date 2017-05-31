<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class community extends Model
{
    protected $table = 'communitys';
    protected $primaryKey = 'community_id';
    protected $fillable = ['community_id','community_name','create_date','passenger_id','admin_id'];

    public function Passenger(){
        return $this->belongsTo('Passenger', 'foreign_key');
    }
}
