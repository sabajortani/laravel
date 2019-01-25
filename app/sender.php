<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $table = 'sender';
    protected $guarded = ['id'];
    public $timestamps = false;


}
