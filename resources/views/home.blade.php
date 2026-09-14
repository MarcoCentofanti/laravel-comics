@extends('layouts.master')

@section('title')
    DC Comics
@endsection

@php
    $comics = config('comics');

@endphp
@section('content')
    @foreach ($comics as $comic)
    <h1>{{$comic['title']}}</h1>
    <img src="{{$comic['thumb']}}" alt="">
        
    @endforeach
    <div class="d-flex justify-content-center">

        <button class="btn btn-primary rounded-0">LOAD MORE</button>
    </div>
        
@endsection