@extends('layouts.main-layout')
@section('content')
    
   
    <h1>Saints</h1>
    <h2><a href="/saint/create">Create a new saint</a></h2>
    <ul>
        @foreach ($saints as $saint)
            <li>
                
                <a href="/saint/show/{{$saint -> id}}">
                    St. {{ $saint -> name }}
                </a>
                -
                <a href="/saint/destroy/{{$saint -> id}}">
                    X
                </a>
            </li>
        @endforeach
    </ul>

   
@endsection

