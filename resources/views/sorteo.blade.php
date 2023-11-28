@extends('layouts.main')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection
    @section('content')
        <div class="sorteo-container">
            <div class="logo my-4">
                <img src="https://www.bancodeoccidente.com.co/portaltransaccional/logo-03-occidente-01-occidente-01-regular.aa547ca6b936469689ea.svg" alt="Logo bnaco de occidente">
            </div>
            <div class="sorteo-content mb-4">
                <h5 class="bold text-center mb-2">BIENVENIDO AL SORTEO</h5>
                <p class="px-5">
                    Oprime el bot&oacute;n para inicar el sorteo entre los invitados presentes. 
                </p>
                <div class="spinners mb-4">
                    <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="ganador mb-4">
                    <div class="form-group">
                        <label for="">Y el ganador es:</label>
                        <input type="text" class="form-control" value="Victor javier Vicente">
                    </div>
                </div>
                <button class="btn btn-primary">INICIAR</button>
            </div>
            <div class="footer">
                <img src="https://www.anif.com.co/wp-content/uploads/2020/11/logo-fiduoccidente.png" alt="">
            </div>    
        </div> 
    @endsection
 