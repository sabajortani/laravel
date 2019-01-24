<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bol extends Model
{
    protected $table = 'bol';
    protected $guarded = ['id'];
    public $timestamps = false;


}