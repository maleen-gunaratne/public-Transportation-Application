<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train_complain extends Model
{
    protected $table = 'train_complains';
    protected $primaryKey = 'id';
    protected $fillable = ['id'];

    public function train(){
        return $this->belongsTo('App\train','foreign_key');
    }
}
