@extends('layouts.master')

@section('title')
    DC Comics
@endsection

@section('jumbo')
    <img class="w-100 hero-img" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
@endsection




@php
    $comics = config('comics');
    
    @endphp
@section('content')
    <section class="bg-dark">
        <div class="container">
            <h3 class="bg-primary text-white">current series</h3>
            <div class="row">

                @foreach ($comics as $comic)
                <div class="col-2">
                    <img class="img-fluid" src="{{$comic['thumb']}}" alt="">
                    <h2 class="text-center fs-6">{{$comic['title']}}</h2>
                </div>
                @endforeach

            </div>
            
            <div class="d-flex justify-content-center">
                
                <button class="btn btn-primary rounded-0">LOAD MORE</button>
            </div>
        </div>
    </section>
        
@endsection