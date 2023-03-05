@extends('web.layout')
@section('main')
    <div class="container mt-4 mb-4">
        <center>
            <div class="card" style="width: 26rem;">
                <img src="{{ asset($juego->imagen) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">{{ strtoupper($juego->nombre) }}</h3>
                    <p style="font-weight: bold" class="card-text">{{ strtoupper($juego->plataforma) }}</p>
                    <p>{{ $juego->descripcion }}</p>
                    <h5 class="card-text" style="font-weight: bold">TORNEOS ASOCIADOS</h5>
                    <ul>
                        @foreach ($torneos as $torneo)
                            @if ($juego->id == $torneo->juego_id)
                                <p class="card-text">
                                    <li style="font-weight: bold">{{ $torneo->nombre }}</li>
                                </p>
                            @endif
                        @endforeach
                        <ul>
                </div>
            </div>
        </center>
    </div>
@endsection
