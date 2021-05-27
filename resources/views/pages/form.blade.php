@extends('layouts.main-layout')
@section('contain')
<h1>modifica dati Employee</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action='{{route('update-employee', $employee -> id)}}'>
    @csrf
    @method('POST')
        <label>Nome:</label>
        <input id='firstname' name='firstname' type="text" value='{{$employee ->firstname}}'>
        <label>Cognome:</label>
        <input id='lastname' name='lastname' type="text" value='{{$employee ->lastname}}'>
        <label>ruolo:</label>
        <input id='role' name='role' type="text" value='{{$employee ->role}}'>
        <label>ral:</label>
        <input id='ral' name='ral' type="text" value='{{$employee ->ral}}'>

        <input type="submit" value='submit'>
        
</form>
@endsection