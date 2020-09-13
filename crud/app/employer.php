<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    //
    protected $table ="employer";
    protected $fillable = ['nama','alamat'];
}
