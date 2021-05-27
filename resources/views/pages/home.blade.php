@extends('layouts.main-layout')
@section('contain')

<p> <strong>Lista</strong></p>
<ul>
     @foreach ($employees as $employee)
     <li> 
        <a href="{{route('edit', $employee -> id)}}">

            {{$employee -> firstname}}
            {{$employee -> lastname}} 

        </a>
         
    </li> 
    @endforeach
</ul>



@endsection