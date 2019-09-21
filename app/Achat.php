<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    protected $table = 'achat';
    protected $primaryKey ='numA';
    protected $fillable = ['date','fournisseur_id'];
}
