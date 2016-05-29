@extends('layout')

@section('content')
    <h1>All cards</h1>

    @foreach($cards as $cards)
        <h3>{{ $cards->title }}</h3>
    @endforeach
@stop
