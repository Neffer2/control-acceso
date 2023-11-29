@extends('layouts.main')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fireworks.css') }}">
@endsection
    @section('content')
        @livewire('sorteo') 
    @endsection
 