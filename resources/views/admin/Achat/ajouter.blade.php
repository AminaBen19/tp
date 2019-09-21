@extends('layouts.master')

@section('title')
Achats | Pharmacie BENAZZA

@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Un nouveau achat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
      <form action="/save-achat" method="POST">
{{ csrf_field() }}

      <div class="modal-body">
      <div class="form-group row">

                            <div class="col-md-6">
                            <label for="numA" class="col-form-label ">N°Achat</label>

                                <input id="numA" type="text"  name="numA" value="{{ old('numA') }}" required autocomplete="numA" autofocus>

                            </div>
                        </div>
        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="fournisseur_id" class="col-form-label ">N°Fournisseur</label>

                                <input id="fournisseur_id" type="text"  name="fournisseur_id" value="{{ old('fournisseur_id') }}" required autocomplete="fournisseur_id" autofocus>

                            </div>
                        </div>


                       

                        
                        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="dateNais" class="col-form-label ">Date d'Achat </label>

                                <input id="date" type="date"  name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                
                            </div>
                        </div>

                        

              

                        <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>   
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              
                                </div>
                                </form>

    </div>
  </div>
</div>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Liste des Achats
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Ajouter Un Achat</button>
                </h4>
                @if(\Session::has('status'))
    <div class="alert alert-success" role="alert">
      {{\Session::get('status')}}
    </div>
  @endif
              
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        ID
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        ID Fournisseur
                      </th>
                      <th>
                        Modifier
                      </th>
                      <th>
                        Supprimer
                      </th>
                      
                    </thead>
                    <tbody>
@foreach ($achat as $row)

                      <tr>
                      <td>
{{ $row->numA }}                       </td>
                        <td>
{{ $row->date }}                       </td>
                        <td>
                        {{ $row->fournisseur_id }} 
                        </td>
 
                        <td >
<a href="/achat-edit/{{ $row->numA }}" class="btn btn-warning">Modifier</a>
                        </td>
                        <td >
                        <form action="/achat-delete/{{ $row->numA }}" method="post">
{{ csrf_field()}}
{{ method_field('DELETE')}}
<button type="submit" class="btn btn-danger">Supprimer</button>
</form>
                        </td>
                      </tr>
                      @endforeach
                                          </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
@endsection


@section('scripts')

@endsection