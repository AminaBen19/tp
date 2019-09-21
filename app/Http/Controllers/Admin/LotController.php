<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Lot;
class LotController extends Controller
{
    public function index(){
        $arr['lot'] = DB::table('achat')
                       ->join('lot', 'achat_id', '=', 'achat.numA')
                       ->get();
       return view('admin.Lot.index')->with($arr);
   }
   public function show($id){
        $vente = DB::table('vente')
              ->select('vente.*')
           ->where('vente.lot_id','=',$id)
           ->get();
           return view('admin.Lot.show', ['vente' => $vente]);
   }
    
}
