<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fournisseur;
use Illuminate\Support\Facades\DB;


class FournisseurController extends Controller
{
    public function index(){

        
        $fourni = DB::table('fournisseur')->paginate(15);

        return view('users.four', ['fourni' => $fourni]);
   }
}
