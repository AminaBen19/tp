@extends('layouts.master')

@section('title')
Achats  | Pharmacie BENAZZA

@endsection

@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="card">

<div class="card-body">

<div class="row">
<div class="col-md-6">
<form action="/achat-register-update/{{ $achat->numA }}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
  <div class="form-group">
    <label for="fournisseur_id">N° Fournissuer</label>
    <input type="text" class="form-control" value="{{ $achat->fournisseur_id }}" name="fournisseur_id" >
  </div>
@foreach($lot as $row)
  <div class="form-group">
    <label for="med_id">ID Medicament</label>
    <input type="text" class="form-control" value="{{ $row->med_id }}" name="med_id" >
  </div>

  <div class="form-group">
    <label for="date_fab">Date Fabrication </label>
    <input type="date" class="form-control" value="{{ $row->date_fab }}" name="date_fab">
  </div>

  <div class="form-group">
    <label for="date_per">Date Peremption </label>
    <input type="date" class="form-control" value="{{ $row->date_per }}" name="date_per">
  </div>

  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control" value="{{ $row->prix }}" name="prix">
  </div>

  <div class="form-group">
    <label for="qt_stock">Quantitée Stock </label>
    <input type="number" class="form-control" value="{{ $row->qt_stock }}" name="qt_stock">
  </div>

  <div class="form-group">
    <label for="qt_achete">Quantitée Achat </label>
    <input type="number" class="form-control" value="{{ $row->qt_achete }}" name="qt_achete">
  </div>
  @endforeach

<button type="submit" class="btn btn-success" > Enregistrer</button>
<a href="/role-register" class="btn btn-danger"> Annuler</a>
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