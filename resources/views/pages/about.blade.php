@extends('layouts.app', ['pageTitle' => 'About Us'])

<!-- @section('title', 'About Us | '. config('app.name')) -->

@section('content')
     
     <img src="{{asset('images/km-logo.jfif')}}" alt="Kumba" class="my-12 rounded-full shadow-md">
     <h2 class="mb-5 text-gray-700">
        Built with 
        <span class="text-pink-500">&hearts;</span>
         by Coumba NGOM.
    </h2>

    <p>
        <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Come back to home page</a>
    </p>

@endsection
    
