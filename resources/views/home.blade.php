@extends('layout.layout')

@section('pageName')

    home

@endsection

@section('content')

<h1>hello world</h1>
<a href="{{ route('main') }}">MAIN</a>
<a href="{{ route('home') }}">HOME</a>


    <div class="row">
        @foreach ($fumetti as $fumetto)
            <div class="col-4 card">
                <div class="card-img">
                    <img src="{{ $fumetto['thumb'] }}" alt="">
                </div>
                <h3>Titolo: {{ $fumetto['title'] }}</h3>
                <p>Descrizione: {{ $fumetto['description'] }}</p>
                <p>Prezzo: {{ $fumetto['price'] }}</p>
                <p>Serie: {{ $fumetto['series'] }}</p>
                <h5>Artista: {{ $fumetto['artists'] }}</h5>
                <h6>Scrittore: {{ $fumetto['writers'] }}</h6>
            </div>
        @endforeach
    </div>

@endsection