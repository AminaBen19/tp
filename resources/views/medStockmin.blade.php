@extends('layouts.app')

@section('title')
Medicament | Pharma Benazza

@endsection

@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">La Liste des Médicaments</h4>
</div>
              <div class="col-md-4"  >
              <form action="/search" method="get">
              <div class="input-group">
              
              <input type="search" name="search" class="form-control">
              <span class="input-group-prepend">
              <button type="submit" class="btn btn-primary">Chercher</button>
              </span>
              </div>
              
              </form>
              </div>

              

              
              
              <div class="card-body">
                <div class="table-responsive">
<table class="table table-bordered table-striped" id="medicament_table">
                    <thead class=" text-primary">
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
                     famille
                      </th><th>
                      Remboursable
                      </th><th>
                      Disponible 
                      </th>
                    </thead>
                   <tbody>
                   @foreach ($med as $row)

<tr>
<td>
{{ $row->nom }}                       </td>
  <td>
{{ $row->dosage }}                       </td>
  <td>
  {{ $row->forme }} 
  </td>
  <td>
  {{ $row->famille }}                         </td>
  <td >
{{ $row->isremboursable  }} 
  </td>
  
  <td>
  @if ($row->stock_min > 0 )
  <?php echo"1"?>
  @else
  <?php echo"0"?>

    @endif                         </td>

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