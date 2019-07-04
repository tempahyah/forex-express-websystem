<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'rate', 
        'bureau_id', 
        'currency_id',
        'mode_id',
        'user_id',
    ];

    public function bureaus(){
        return $this->belongsTo('App\Bureau');
    }

    public function currencies(){
        return $this->hasMany('App\Currency');
    }


    public function modes(){
        return $this->hasMany('App\Mode');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
