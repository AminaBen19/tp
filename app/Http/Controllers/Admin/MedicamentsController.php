<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medicaments;
use Illuminate\Support\Facades\DB;


class MedicamentsController extends Controller
{
    public function index(){

        $med = DB::table('medicament')->paginate(15);

         return view('admin.dashboard')->with('med',$med);

    }

    public function indexGes(){

        $med = DB::table('medicament')->paginate(15);

         return view('admin.medicaments')->with('med',$med);

    }

}
