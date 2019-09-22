@extends('layouts.master1')

@section('title')
Fournisseur | Pharmacie BENAZZA

@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Liste des Fournisseurs</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        ID
                      </th>
                      <th>
                        Nom
                      </th>
                      <th>
                        Adresse
                      </th>
                      <th>
                      N°Téléphone
                      </th>
                      <th>
                      Email
                      </th>
                    </thead>
                   <tbody>
                   @foreach ($fourni as $row)

<tr>
<td>
  {{ $row->idF }}                         </td>
  
<td>
{{ $row->nom }}                       </td>
  <td>
{{ $row->adresse }}                       </td>
  <td>
  {{ $row->tel }} 
  </td>
  <td>
  {{ $row->email }}                         </td>
  

</tr>
@endforeach
                   </tbody>
                   
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>

@endsection


@section('scripts')

@endsection