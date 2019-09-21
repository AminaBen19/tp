<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Vente;
use App\Lot;
use App\Models\Medicament;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenteController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
      }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['vente'] = DB::table('vente')->select('vente.*')->paginate(30);
        return view('Vente.dashboard')->with($arr);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_Lot = DB::table('lot')
            ->select('lot.numL')
            ->where('qt_stock','>','0')
            ->get();
        $lot_achat = DB::table('achat')
             ->join('lot', 'achat.numA', '=', 'lot.achat_id')
            ->select('lot.numL')
            ->get();
            return view('Vente.ajouter', ['id_Lot' => $id_Lot, 'lot_achat'=>$lot_achat ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vente= DB::table('vente')
                ->select('vente.*')
                ->where('idV','=',$id)
                ->get();
        $v = Vente::where('idV', '=', $id)->first();
        $lot = Lot::where('numL', '=', $v->lot)->first();
        $med = Medicament::where('idM', '=', $lot->med)->first();
        return view('Vente.dashoard',['vente' =>$vente, 'med' =>$med]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $v = Vente::find($id);
         $id_Lot = DB::table('lot')
            ->select('lot.numL')
            ->where('qt_stock','>','0')
            ->get();
        return view('Vente.modifier',['v'=>$v,'id_Lot'=>$id_Lot]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vente = Vente::find($id);
        $vente->lot_id = $request->input('lot_id');
        $vente->date = $request->input('date');
        $vente->qt = $request->input('qt');
        $vente->save();
        return redirect('vente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $v = Vente::find($id);
        $v->delete();
        return redirect('vente');
    }
}
