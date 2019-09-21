@extends('layouts.master')

@section('title')
Lot | Pharmacie BENAZZA

@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Gestion des Lots</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th scope="col">N° Vente</th>
<th>ID Pharmacien</th>
             <th scope="col">Date de Vente</th>
             <th scope="col">Quantitée</th>
                    </thead>
                    <tbody>


                    @foreach ($vente as $row)
                   

<tr>
<td>{{ $row->idV }}  </td>
<td>
{{ $row->pharmacien_id }}                       </td>
  <td>
{{ $row->date }}                       </td>
  <td>
  {{ $row->qt }} 
  </td>
  
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