@extends('web.layout')


@section('main')
    <div class="container">
        <h1 class="text-dark mt-5" style="text-align: center"> JUEGOS </h1>
        <div class="row mb-5">
            @foreach ($juegos as $juego)
                <div class="card p-3 m-3" style="width: 25rem;">
                    <img class="card-img-top img-responsive" height="320px" src="{{ asset($juego->imagen) }}" />
                    <a class="btn btn-dark mt-3" href="/juegos/{{ $juego->id }}">DETALLE</a>
                    <div class="card-body">
                        <h5 class="card-title">{{ strtoupper($juego->nombre) }}</h5>
                        <p class="card-text">{{ $juego->descripcion }}</p>
                        <p style="font-weight: bold" class="card-text"><b>{{ strtoupper($juego->plataforma) }}</b></p>

                        @if (!empty($torneos))
                            <p>TORNEOS ASOCIADOS: </p>
                            <ul>
                                @foreach ($torneos as $torneo)
                                    @if ($juego->id == $torneo->juego_id)
                                        <li> <b> {{ $torneo->nombre }}</b></li>
                                    @endif
                                @endforeach
                            <ul>
                        @endif
                      
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
