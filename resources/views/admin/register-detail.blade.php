@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<table>
<tr>
<td><img src="/uploads/avatars/{{ $users->photo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
</td>
      <tr><td>Nom :</td><td>{{ $users->nom }}</td></tr>  
        
      <tr><td>Prenom :</td> <td>{{ $users->prenom }}</td></tr>
      <tr><td>Date Naissance :</td> <td>{{ $users->dateNais }}</td></tr>
      <tr><td>N° Telephone</td> <td>{{ $users->telephone }}</td></tr>
      <tr><td>Email :</td> <td>{{ $users->email }}</td></tr>

        </tr>
        </table>
   
        
        


                </div>
    </div>
</div>
@endsection