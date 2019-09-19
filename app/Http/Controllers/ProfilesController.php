<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\User;
class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required', 
            'dateNais' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
    
            'login' => 'required',
            'password' => 'required|confirmed'
    
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
        $user->save();

    }


    
    Session::flash('success','Account profile updated');
    
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
