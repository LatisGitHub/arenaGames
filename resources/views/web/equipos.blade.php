@extends('web.layout')


@section('main')
    <div class="container">
        <h1 class="text-dark mt-5" style="text-align: center">EQUIPOS</h1>
        <a class="btn btn-secondary mt-5 mb-3" href="/equipos/nuevo/nuevo">Nuevo Equipo</a>

        <div class="row mb-5">
            @foreach ($equipos as $equipo)
                <div class="card p-3 m-3 " style="width: 23rem;">
                    <img class="card-img-top img-responsive" height="300PX" src="{{ asset($equipo->imagen) }}" />
                    <a href="/equipos/{{ $equipo->id }}" class="btn btn-dark mt-2"> DETALLE </a>

                    @php
                        $usuarios = $equipo->componentes()->get();
                    @endphp

                    @foreach ($usuarios as $usuario)
                        @if ($usuario->id == Auth::user()->id)
                            <a href="/equipos/{{ $equipo->id }}/borrar" class="btn btn-danger mt-1"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg></a>
                        @endif
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{ strtoupper($equipo->nombre) }}</h5>
                        <p class="card-text">Modalidad: {{ $equipo->modalidad }} VS
                            {{ $equipo->modalidad }}</p>
                        <p style="font-weight: bold"> <b>ESTADO: {{ strtoupper($equipo->estado) }}</b></p>

                    </div>
                </div>
            @endforeach
            {{ $equipos->links() }}
        </div>
    </div>
@endsection
