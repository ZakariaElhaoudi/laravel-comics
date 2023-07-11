@extends('layout.layout')

@section('pageName')

    home

@endsection

@section('content')

<h1 class="text-center">Fumetti</h1>
<a href="{{ route('main') }}">MAIN</a>
<a href="{{ route('home') }}">HOME</a>


    <div class="row">
        @foreach ($fumetti as $fumetto)
            <div class="col-4 card my-4 px-2">
                <div class="card-img">
                    <img src="{{ $fumetto['thumb'] }}" alt="">
                </div>
                <h3>Titolo: {{ $fumetto['title'] }}</h3>
                <p>Descrizione: {{ $fumetto['description'] }}</p>
                <h4>Prezzo: {{ $fumetto['price'] }}</h4>
                <h4>Serie: {{ $fumetto['series'] }}</h4>
                <h5>Artisti: </h5>
                <ul>
                    @foreach ($fumetto['artists'] as $artist)
                        <li>{{ $artist }}</li>
                    @endforeach
                </ul>
                <h5>Scrittori:</h5>
                <ul>
                    @foreach ($fumetto['writers'] as $writer)
                        <li>{{ $writer }}</li>
                    @endforeach
                </ul>

            </div>
        @endforeach
    </div>

@endsection