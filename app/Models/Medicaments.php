<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicaments extends Model
{
    protected $table = 'medicament';
    protected $fillable = ['nom','dosage','forme','famille','isremboursable','stock_min'];
}
