@extends('layouts.master1')

@section('title')
Achats | Pharmacie BENAZZA

@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Liste des Achats
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