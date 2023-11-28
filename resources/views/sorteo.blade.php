@extends('layouts.main')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
    @section('content')
        @livewire('sorteo') 
    @endsection
 