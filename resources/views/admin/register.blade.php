@extends('layouts.master')

@section('title')
Registered Roles | Pharmacie BENAZZA

@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Un nouveau pharmacien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form action="/save-users" method="POST">
{{ csrf_field() }}

      <div class="modal-body">
        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="nom" class="col-form-label">Nom </label>

                                <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="prenom" class="col-form-label">Prenom </label>

                                <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="dateNais" class="col-form-label">Date Naissance </label>

                                <input id="dateNais" type="date" name="dateNais" value="{{ old('dateNais') }}" required autocomplete="dateNais" autofocus>

                                @error('dateNais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="telephone" class="col-form-label">Telephone </label>

                                <input id="telephone" type="text" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                            <label for="email" class="col-form-label">E-Mail </label>

                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">

                        <div class="col-md-6">
                        <label for="login" class="col-form-label">Login </label>

                                <input id="login" type="text" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        

                        <div class="form-group row">

<div class="col-md-6">
<label for="password" class="col-form-label">Mot de passe </label>

    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>
                        </div>

                        <div class="form-group row">

<div class="col-md-6">
<label for="password-confirm" class="col-form-label">Confirme le Mot de passe</label>

    <input id="password-confirm" type="password" name="password_confirmation" required>
</div>
                        </div>

      
        <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
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
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Ajouter Un pharmacien</button>
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
                        login
                      </th>
                      <th>
                        N°Telephone
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Detail
                      </th>
                      <th>
                        Modifier
                      </th>
                      <th>
                        Supprimer
                      </th>
                      
                    </thead>
                    <tbody>
@foreach ($users as $row)

                      <tr>
                      <td>
{{ $row->id }}                       </td>
                        <td>
{{ $row->login }}                       </td>
                        <td>
                        {{ $row->telephone }} 
                        </td>
                        <td>
                        {{ $row->email }}                         </td>
<td >
<a href="/role-datail/{{ $row->id }}" class="btn btn-success">Detail</a>
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