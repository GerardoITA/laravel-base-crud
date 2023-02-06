@extends('layouts.main-layout')
@section('content')
    
   
    <h1>Saints</h1>
    <ul>
        @foreach ($saints as $saint)
            <li>
                
                <a href="{{ route('saint.show', ['$test' => $saint -> id]) }}">
                    St. {{ $saint -> name }}
                </a>
                -
                <a href="">
                    X
                </a>
            </li>
        @endforeach
    </ul>

   
@endsection

