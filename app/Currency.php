<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'mode',
    ];

    public function rate(){
        return $this->belongsTo('App\Rate');
    }
}
