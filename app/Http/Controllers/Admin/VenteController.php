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
    
}
