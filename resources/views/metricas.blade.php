@extends('layouts.main')
    @section('content')
        <div class="card">
            <div class="card-header"> 
                <h3>M&eacute;tricas</h3>
            </div>
            <div class="card-body">
                Hasta el momento, hay {{ $invitados }} invitados presentes.
            </div>
        </div>
    @endsection
