@extends('layouts.layout')

@section('pageName')

    home

@endsection

@section('content')

<h1>hello world</h1>
<a href="{{ route('main') }}">Main</a>


@endsection