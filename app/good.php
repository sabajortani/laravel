<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class good extends Model
{
    protected $table = 'good';
    protected $guarded = ['id'];
    public $timestamps = false;


}
