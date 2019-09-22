@extends('layouts.master1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                
                <div class="card-body">
                @if(\Session::has('error'))
    <div class="alert alert-danger" role="alert">
      {{\Session::get('error')}}
    </div>
  @endif
  <div class="content">
            <div class="links">
                    

                </div>
                
                


                </div>
            </div>
        </div>
    </div>
</div>
@endsection



