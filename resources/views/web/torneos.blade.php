@extends('web.layout')


@section('main')
    <div class="container">
        <h1 class="text-dark mt-5" style="text-align: center">TORNEOS</h1>
        <div class="row mb-5">
            @foreach ($torneos as $torneo)
                <div class="card p-3 m-3 " style="width: 23rem;">
                    @foreach ($juegos as $juego)
                        @if ($torneo->juego_id == $juego->id)
                            <img class="card-img-top img-responsive" height="320px" src="{{ asset($juego->imagen) }}" />
                            <a href="/torneos/{{ $torneo->id }}" class="btn btn-dark mt-2">DETALLE</a>
                        @endif
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{ strtoupper($torneo->nombre) }}</h5>
                        <p class="card-text">Fecha: {{ $torneo->fecha }}</p>
                        <p style="font-weight: bold"><b>ESTADO: {{ strtoupper($torneo->estado) }}</b></p>
                        <p class="card-text"><b>Modalidad: {{ $torneo->modalidad }} VS
                                {{ $torneo->modalidad }}</b></p>
                        
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
