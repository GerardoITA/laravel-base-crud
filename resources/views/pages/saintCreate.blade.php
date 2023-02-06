@extends('layouts.main-layout')
@section('content')
    
<h1>CREATE NEW SAINT</h1>
    <form method="POST" action="{{ route('saint.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="birthplace">Birthplace</label>
        <input type="text" name="birthplace">
        <br>
        <label for="canonization">Blessing date</label>
        <input type="date" name="canonization">
        <br>
        <label for="miracles">Miracle count</label>
        <input type="number" name="miracles">
        <br>
        <input type="submit" value="CREATE NEW SAINT">
    </form>
@endsection