<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forme extends Model
{
    protected $table = 'forme';
    protected $fillable = ['id','forme_name'];
}
