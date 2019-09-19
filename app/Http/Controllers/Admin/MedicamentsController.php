<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medicaments;

class MedicamentsController extends Controller
{
    public function index(){

         $med = Medicaments::all();
         return view('medicamentPre')->with('med',$med);

    }
}
