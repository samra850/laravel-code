@extends('layouts.app')
   
@section('content')
    
    <h1>
        Aptech Edu
    </h1>

    @if( isset($fname) )
        <h2>
            {{ $fname  }} and  {{$lname}}
        </h2>
    @endif

@endsection

