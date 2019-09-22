<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered(){

        $users = User::all();
return view('admin.register')->with('users',$users);

    }

    public function registeredit(Request $request, $id){
$users = User::findOrFail($id);
return view('admin.register-edit')->with('users',$users);        

    }


    public function registerupdate(Request $request, $id){
        $users = User::findOrFail($id);
$users->login = $request->input('login');   
$users->telephone = $request->input('telephone'); 
$users->email = $request->input('email');        
$users->update();

return redirect('/role-register');

            }



            public function registerdelete(Request $request, $id){
                $users = User::findOrFail($id);
$users->delete(); 
return redirect('/role-register');

                    }


                    public function store(Request $request){

$users = new User;


$users->nom = $request->input('nom');
$users->prenom = $request->input('prenom');
$users->dateNais = $request->input('dateNais');
$users->telephone = $request->input('telephone');
$users->email = $request->input('email');
$users->login = $request->input('login');
$users->password = $request->input('password');
                        
$users->save();

return redirect('/role-register');

                    }



                    public function show($id){
                      
                        $users = User::findOrFail($id);
                        return view('admin.register-detail')->with('users',$users);

                    }


}
