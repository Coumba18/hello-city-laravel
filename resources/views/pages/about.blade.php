@extends('app')

@section('title', 'About Us | '. config('app.name'))

@section('content')
     <p>Built with &hearts; by Coumba NGOM.</p>

    <p><a href="{{route('home')}}">Come back to home page</a></p>

@endsection
    
