@extends('layouts.master')

@section('title')
Lot | Pharmacie BENAZZA

@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Liste des Lots</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
             <th>ID</th>
             <th>N° Achat</th>
             <th>Médicament</th>
             <th>Date Fab</th>
<th>Date Per</th>
<th>Prix</th>
<th>Quatitée Achetée</th>
             <th>Quatitée au stock</th>

           </tr>
                    </thead>
                    <tbody>


                    @foreach ($lot as $row)
                   

<tr>
<td>{{ $row->numL }}  </td>
<td>
{{ $row->achat_id }}                       </td>
  <td>
{{ $row->med_id }}                       </td>
  <td>
  {{ $row->date_fab }} 
  </td>
  <td>
  {{ $row->date_per }}                         </td>

  <td>
{{ $row->prix }}                       </td>
  <td>
  {{ $row->qt_achete }} 
  </td>
  <td>
  {{ $row->qt_stock }}                         </td>
  <td class="text-left">
                <form action="{{ url() }}" method="post">
                  {{ csrf_field() }}

                  <a href="{{ url() }}" class="btn btn-primary" title="detail"><i class="fa fa-align-justify"></i></a>


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
          
        </div>

@endsection


@section('scripts')

@endsection
