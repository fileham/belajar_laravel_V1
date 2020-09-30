<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function article(){
    	return $this->belongsTo('App\Article');
    }
}