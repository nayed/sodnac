@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>{{ $note->body }}</h3>
        </div>
    </div>
@stop