@extends('web.layout')

@section('main')
    <div class="container">
        <div class="card text-center mt-4">
            <div class="card-header">
                TORNEO - {{ strtoupper($torneo->nombre) }}
            </div>
            <div class="card-body">
                @foreach ($juegos as $juego)
                    @if ($torneo->juego_id == $juego->id)
                        <h2 class="text-primary"><b>{{ strtoupper($juego->nombre) }}</b></h2>
                    @endif
                @endforeach

                <p class="card-text"><b>FECHA DE INICIO: {{ $torneo->fecha }}</b></p>
                
                <p class="card-text"><b>NIVEL: {{ strtoupper($torneo->nivel) }}</b></p>
                <p style="font-weight: bold" class="card-text"> <b>MODALIDAD DEL JUEGO: {{ $torneo->modalidad }} VS {{ $torneo->modalidad }}</b></p>
                <a href="/torneos/{{ $torneo->id }}/inscribir"> <button class="btn btn-primary">INSCRIBIRSE </button> </a>
            </div>
            <div class="card-footer" style="font-weight: bold">
                ESTADO: {{ strtoupper($torneo->estado) }}
            </div>
        </div>



        <h1 class="mt-4 text-primary" style="text-align: center">EQUIPOS DEL TORNEO</h1>
        <div class='row mb-5 mt-3 '>
            @foreach ($equipos as $equipo)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ asset($equipo->imagen) }}" class="card-img-top" width="300px" height="230px"
                        alt="...">
                    <a class="btn btn-primary mt-2" href="/equipos/{{ $equipo->id }}">VER</a>
                    @php
                        $usuarios = $equipo->componentes()->get();
                    @endphp

                    @foreach ($usuarios as $usuario)
                        @if ($usuario->id == Auth::user()->id)
                            <a class="btn btn-danger"
                                href="/torneos/{{ $torneo->id }}/equipos/{{ $equipo->id }}/borrar"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg></a>
                        @endif
                    @endforeach

                    <div class="card-body">
                        <h5 class="card-title">{{ strtoupper($equipo->nombre) }}</h5>
                        <p style="font-weight: bold" class="card-text"><b>MODALIDAD: {{ $equipo->modalidad . ' VS ' . $equipo->modalidad }}</b></p>
                        <p style="font-weight: bold" class="card-text"><b>ESTADO: {{ strtoupper($equipo->estado) }}</b></p>
                    </div>
                </div>
            @endforeach
        </div>



    </div>
@endsection
