<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Image;
use Session;
class UserController extends Controller
{
    //
    public function index(){


return view('profile')->with('user',Auth::user());




    }







  /*  public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
*/
    // Handle the user upload of avatar

    public function update_avatar(Request $request){
    if($request->hasFile('photo')){
        $photo = $request->file('photo');
        $filename = time() . '.' . $photo->getClientOriginalExtension();
        Image::make($photo)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
        $user = Auth::user();
        $user->photo = $filename;
        $user->save();
    }
    return view('profile', array('user' => Auth::user()) );
}

public function update(Request $request){

    $this->validate($request,[
        'nom' => 'required',
        'prenom' => 'required', 
        'dateNais' => 'required',
        'telephone' => 'required',
        'email' => 'required|email',

        'login' => 'required',
        'password' => 'required|confirmed',

    ]);

    $user = Auth::user();

    if($request->hasFile('photo')){
    $photo = $request->photo;
    $photo_new_name = time() . $photo->getClientOriginalName(); 
    
$photo->move('uploads/avatars/',$photo_new_name);
$user->profile->photo = 'uploads/avatars/' . $photo_new_name ;
$user->profile->save();
    }

    $user->nom = $request->nom;
$user->prenom = $request->prenom;
$user->dateNais = $request->dateNais;
$user->telephone = $request->telephone;
$user->email = $request->email;
$user->login = $request->login;

$user->save();
$user->profile->save();

if($request->has('password')){


    $user->password = bcrypt($request->password);

}

Session::flash('success','Account profile updated');

return redirect()->back();
}

}