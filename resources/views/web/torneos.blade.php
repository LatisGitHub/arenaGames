@extends('web.layout')


@section('main')
    <div class="container mt-4">
        <div class="form-container mt-3" style="margin-left: 25%">
            <form method="POST" action='/torneo/buscar' enctype="multipart/form-data">
                @csrf
                <label for="fecha" style="font-weight: bold">FECHA</label>
                <x-text-input id="buscarFecha" class="block mt-1 w-full" type="date" name="buscarFecha" :value="old('numEntradas')"
                    required autofocus autocomplete="buscarFecha" />
                <button class="btn btn-dark" type="submit">BUSCAR</button>
            </form>
        
            <form method="POST" action='/torneo/buscarModalidad' enctype="multipart/form-data">
                @csrf
                <label for="modalidad" style="font-weight: bold">MODALIDAD</label>
                <select name="modalidad" class="block mt-1 w-full">
                    <option value="1">1 VS 1</option>
                    <option value="2">2 VS 2</option>
                    <option value="3">3 VS 3</option>
                    <option value="4">4 VS 4</option>
                    <option value="5">5 VS 5</option>
                </select>
                <button class="btn btn-dark" type="submit">BUSCAR</button>
            </form>
        </div>
        
        <style>
        .form-container {
            display: flex;
            gap: 20px;
        }
        </style>
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
            {{ $torneos->links() }}
        </div>
    </div>
@endsection
