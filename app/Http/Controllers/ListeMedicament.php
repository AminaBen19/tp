<?php

namespace App\Http\Controllers;
use App\Models\Medicaments;
use App\Forme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeMedicament extends Controller
{
    public function index(){

        
        $med = DB::table('medicament')->paginate(15);

        return view('medicamentPre', ['med' => $med]);
   }


   public function indexa(Request $request){
       if(request()->ajax()){

if($request->forme){
$data=DB::table('medicament')
       ->join('forme' , 'forme.forme.id' , '=' , 'medicament.forme')
       ->select('medicament.idM','medicament.nom','forme.forme_name'
       ,'medicament.famille')
       ->where('medicament.forme',$request->forme);
}
else{
    $data=DB::table('medicament')
    ->join('forme' , 'forme.forme.id' , '=' , 'medicament.forme')
    ->select('medicament.idM','medicament.nom','forme.forme_name'
    ,'medicament.famille','medicament.isremboursable','medicament.stock_min');

}


return datatables()->of($data)->make(true);
       }
$forme = DB::table('forme')
        ->select("*")
        ->get();

        return view('medicamentPre',compact('forme'));


   }









public function search(){
$search = $request->get('search'); 

$med = DB::table('medicament')->where('nom','like','%'.$search.'%')
                              ->orWhere('dosage','like','%'.$search.'%')
                              ->orWhere('forme','like','%'.$search.'%')
                              ->orWhere('famille','like','%'.$search.'%')
                              ->paginate(20);
return view('medicamentPre',['med' => $med]);
                            

                            }


}
