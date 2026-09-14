@extends('layouts.master')

@section('title')
    DC Comics
@endsection

@section('jumbo')
    <img class="w-auto" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
@endsection

@section('banner')
    <h3 class="d-block bg-primary text-white">current series</h3>
@endsection

@php
    $comics = config('comics');

@endphp
@section('content')
    @foreach ($comics as $comic)
    <div class="col-2">
        <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
        <h1 class="text-center fs-6">{{$comic['title']}}</h1>
    </div>
        
    @endforeach
    <div class="d-flex justify-content-center">

        <button class="btn btn-primary rounded-0">LOAD MORE</button>
    </div>
        
@endsection