@extends('app')

@section('title', 'Hello City')

@section('content')
    <img src="{{asset('images/senegal.png')}}" alt="Senegal Flag">
    <h1>Hello from Senegal</h1>

    <p>It's currently {{ date('h:i A')}}.</p>

@endsection
