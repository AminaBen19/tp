@extends('layouts.app')

@section('title')
Edit-Profile  | Pharma Benazza

@endsection

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="card">
<div class="card-header">
<h3>Edit profile </h3>
</div>

<div class="card-body">

<div class="row">
<div class="col-md-6">

<form action="{{ route('profile.update') }}" method="POST"  enctype="multipart/form-data">
@csrf

<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" value="{{ $user->nom }}" name="nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" value="{{$user->prenom }}" name="prenom">
  </div>
  <div class="form-group">
    <label for="dateNais">Date Naissance</label>
    <input type="date" class="form-control" value="{{ $user->dateNais }}" name="dateNais">
  </div>

  

  <div class="form-group">
    <label for="telephone">Num telephone</label>
    <input type="text" class="form-control" value="{{ $user->telephone }}" name="telephone">
  </div>

  <div class="form-group">
    <label for="email">Email </label>
    <input type="text" class="form-control" value="{{ $user->email }}" name="email">
  </div>

  <div class="form-group">
    <label for="login">login</label>
    <input type="text" class="form-control" value="{{ $user->login }}" name="login">
  </div>

  

  <div class="form-group">
    <label for="photo">telecharger nv photo</label>
    <input type="file" class="form-control" value="{{ $user->photo }}" name="photo">

  </div>
  <div class="form-group">
    <label for="password"> password</label>
    <input type="password" class="form-control" value="{{ $user->password }}" name="password">
  </div> 
  <div class="form-group">
    <label for="password">Confirm password</label>
    <input type="password" class="form-control" value="{{ $user->password }}" name="password">
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-success" > Update</button>

    </div>

</form>





</div>

</div>







</div>




</div>






</div>

</div>

</div>


@endsection



@section('scripts')

@endsection