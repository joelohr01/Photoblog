@extends('layouts.app')

@if(Auth::check())
    @include('partials.navbar')
@endif

@section('content')
    <h1>Fronted Home</h1>
@endsection