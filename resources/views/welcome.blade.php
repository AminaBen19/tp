@extends('layouts.presantation')

@section('title')
Pharmacie BENAZZA

@endsection

@section('content')




    
        <div class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <div class="links">
                    <a href="/medicamentPre">Medicament</a>
 <a href="/contact">Contact</a>
                </div>
                
                <div class="title m-b-md">
                    Pharmacie
                </div>

                
            </div>
        </div>
    
@endsection


@section('scripts')

@endsection