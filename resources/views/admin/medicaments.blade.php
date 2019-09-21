@extends('layouts.master')

@section('title')
Medicament | Pharmacie BENAZZA

@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Gestion des Médicaments</h4>
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
                        Dosage
                      </th>
                      <th>
                        Forme
                      </th>
                      <th>
                        Famille
                      </th>
                    </thead>
                    <tbody>


                    @foreach ($med as $row)
                   

<tr>
<td>{{ $row->idM }}  </td>
<td>
{{ $row->nom }}                       </td>
  <td>
{{ $row->dosage }}                       </td>
  <td>
  {{ $row->forme }} 
  </td>
  <td>
  {{ $row->famille }}                         </td>
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