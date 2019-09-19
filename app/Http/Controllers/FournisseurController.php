<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fournisseur;
use Illuminate\Support\Facades\DB;


class FournisseurController extends Controller
{
    public function index(){

        
        $fourni = DB::table('fournisseur')->paginate(15);

        return view('fournisseurs', ['fourni' => $fourni]);
   }
}
