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
  
      <form action="" method="POST">
{{ csrf_field() }}

      <div class="modal-body">
        <div class="form-group row">
                            <label for="nom" class="col-form-label">n° Achat </label>

                            <div class="col-md-6">
                                <input id="numA" type="text" class="form-control @error('numA') is-invalid @enderror" name="numA" value="{{ old('numA') }}" required autocomplete="numA" autofocus>

                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="dateNais" class="col-md-4 col-form-label text-md-right">Date d'Achat </label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="telephone" class="col-form-label">ID Fournisseur </label>

                            <div class="col-md-6">
                                <input id="fournisseur_id" type="text" class="form-control @error('fournisseur_id') is-invalid @enderror" name="fournisseur_id" value="{{ old('fournisseur_id') }}" required autocomplete="fournisseur_id" autofocus>

                                
                            </div>
                        </div>

                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>      
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
<a href="/role-edit/{{ $row->id }}" class="btn btn-warning">Modifier</a>
                        </td>
                        <td >
                        <form action="/role-delete/{{ $row->id }}" method="post">
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