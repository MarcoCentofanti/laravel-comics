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
    <section class="comics-section bg-dark text-white">
        <div class="container">
            <h2 class="current-series d-inline-block bg-primary text-white text-uppercase px-4 py-2 mb-4">current series</h2>
            <div class="row g-4">

                @foreach ($comics as $comic)
                <div class="col-6 col-md-4 col-lg-2">
                    <img class="comic-cover w-100" src="{{ $comic['thumb'] }}" alt="Copertina di {{ $comic['title'] }}">
                    <h2 class="comic-title text-white text-uppercase mt-3">{{$comic['title']}}</h2>
                </div>
                @endforeach

            </div>
            
            <div class="mt-5 d-flex justify-content-center">
                
                <button class="px-5 fw-bold btn btn-primary rounded-0">LOAD MORE</button>
            </div>
        </div>
    </section>
        
@endsection
