@extends('web.layout')

@section('main')
<div class="container mt-4 mb-4">
    <center>
        <div class="card" style="width: 26rem;">
            <img src="{{ asset($equipo->imagen) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title text-primary">{{ strtoupper($equipo->nombre) }}</h2>
                <p class="card-text" style="font-weight: bold"> <b>ESTADO: {{ strtoupper($equipo->estado) }}</b></p>
                <p class="card-text" style="font-weight: bold"><b>{{ $equipo->modalidad . ' VS ' . $equipo->modalidad }}</b></p>
                <a href="/equipos/{{ $equipo->id }}/jugadores/{{ Auth::user()->id }}"><button
                        class="btn btn-dark mb-3 text-light">INSCRIBIRSE</button></a>
                <h3 class="card-text text-primary">JUGADORES</h3>
                @foreach ($jugadores as $elemento)
                    @if (Auth::user()->id == $elemento->id)
                        <p class="card-text">{{ $elemento->nick }} - {{ $elemento->email }}
                            <a class="card-text text-danger mx-2" style="display: inline-block"
                                href="/equipos/{{ $equipo->id }}/jugadores/{{ Auth::user()->id }}/borrar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg></a>
                        </p>
                    @else
                        <p> {{ $elemento->nick }} - {{ $elemento->email }}</p>
                    @endif
                @endforeach
            </div>
        </div>
    </center>
</div>
@endsection
