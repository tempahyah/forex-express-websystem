<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function rates(){
        return $this->hasMany('App\Rate');
    }
}
