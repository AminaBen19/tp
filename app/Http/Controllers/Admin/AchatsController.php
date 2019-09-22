<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Achat;
use App\Lot;
use App\Models\Medicaments;
use Illuminate\Support\Facades\DB;


class AchatsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
      }

    public function index(){

$ach['achat']=Achat::all();
return view('admin.Achat.dashboard')->with($ach);

    }
    public function store(Request $request){

        $achat = new Achat;
        
        
        $achat->date = $request->input('date');
        $achat->fournisseur_id = $request->input('fournisseur_id');
        
                                
        $achat->save();
        
        return redirect('/achat-register');
        
                            }

                            public function registered(){

                                $achat = Achat::all();
                        return view('admin.Achat.ajouter')->with('achat',$achat);
                        
                            }

                            public function registerdelete(Request $request, $numA){
                                $achat = Achat::findOrFail($numA);
                $achat->delete(); 
                return redirect('/achat-register');
                
                                    }

                                    public function achatedit(Request $request, $id){
                                        $achat = Achat::findOrFail($id);


        $lot = DB::table('lot')
               ->select('lot.*')
               ->where('achat_id','=',$id)
               ->get();
        $fourni = DB::table('fournisseur')
               ->select('fournisseur.idF')
               ->get();
        $med = DB::table('medicament')
               ->select('medicament.idM')
               ->get();
        return view('admin.Achat.modifier',['achat'=>$achat, 'lot'=>$lot, 'fourni'=>$fourni, 'med'=>$med]);



                                    }

                                    public function achatupdate(Request $request, $id){
                                        
                                            $achat = Achat::find($id);
                                            $achat->date = $request->input('date');
                                            $achat->fournisseur_id = $request->input('idF');
                                            $achat->save();
                                            $lot =DB::table('lot')
                                                  ->where('achat_id', $id)
                                                  ->update();
                                            return redirect('/achat-register');
                                        }
                                        




                                    
}
