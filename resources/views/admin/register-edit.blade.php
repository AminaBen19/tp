@extends('layouts.master')

@section('title')
Edit-Registered  | Pharmacie BENAZZA

@endsection

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="card">
<div class="card-body">

<div class="row">
<div class="col-md-6">
<form action="/role-register-update/{{ $users->id }}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
  <div class="form-group">
    <label for="login">login</label>
    <input type="text" class="form-control" value="{{ $users->login }}" name="login" placeholder="Entrer le nouveau login">
  </div>

  <div class="form-group">
    <label for="telephone">Num telephone</label>
    <input type="text" class="form-control" value="{{ $users->telephone }}" name="telephone" placeholder="Entrer le nouveau Numero  telephone">
  </div>

  <div class="form-group">
    <label for="email">Email </label>
    <input type="text" class="form-control" value="{{ $users->email }}" name="email"placeholder="Entrer le nouveau email">
  </div>
<button type="submit" class="btn btn-success" > Update</button>
<a href="/role-register" class="btn btn-danger"> Concel</a>
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