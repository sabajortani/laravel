<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tell extends Model
{
    protected $table = 'tell';
    protected $guarded = ['id'];
    public $timestamps = false;


}