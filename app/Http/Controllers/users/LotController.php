<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Achat;
use App\Vente;
class LotController extends Controller
{
    //
    public function index(){
        $arr['lot'] = DB::table('achat')
                       ->join('lot', 'achat_id', '=', 'achat.numA')
                       ->get();
       return view('users.lot')->with($arr);
   }
}
