<?php

namespace App\Http\Controllers;
use App\Models\Medicaments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeMedicament extends Controller
{
    public function index(){

        
        $med = DB::table('medicament')->paginate(15);

        return view('medicamentPre', ['med' => $med]);
   }

   public function indexUser(){

        
    $med = DB::table('medicament')->paginate(15);

    return view('users.medPre', ['med' => $med]);
}

public function indexDash(){

    $med = DB::table('medicament')->paginate(15);

     return view('users.dashboard')->with('med',$med);

}



public function search(Request $request){
$search = $request->get('search'); 

$med = DB::table('medicament')->where('nom','like','%'.$search.'%')
                              ->orWhere('dosage','like','%'.$search.'%')
                              ->orWhere('forme','like','%'.$search.'%')
                              ->orWhere('famille','like','%'.$search.'%')
                              ->paginate(20);
return view('medicamentPre',['med' => $med]);
                            

                            }


}
