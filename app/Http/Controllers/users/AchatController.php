<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Achat;
use App\Lot;
use App\Models\Medicaments;
use Illuminate\Support\Facades\DB;


class AchatController extends Controller
{
    public function index(){

        $ach['achat']=Achat::all();
        return view('users.achat')->with($ach);
        
            }
}
