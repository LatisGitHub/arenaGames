@extends('web.layout')


@section('main')
    <div class="container">
        <div class="form-container mt-3" style="margin-left: 25%">
            <form method="POST" action='/juego/buscarPlataforma' enctype="multipart/form-data">
                @csrf
                <label for="plataforma" style="font-weight: bold">PLATAFORMA</label>
                <select name="plataforma" class="block mt-1 w-full">
                    <option value="pc">PC</option>
                    <option value="xbox">XBOX</option>
                    <option value="ps4">PS4</option>
                    <option value="ps5">PS5</option>
                </select>
                <button class="btn btn-dark" type="submit">BUSCAR</button>
            </form>
            <form method="POST" action='/juego/buscarJuego' enctype="multipart/form-data">
                @csrf
                <label for="plataforma" style="font-weight: bold">JUEGO</label>
                <input type="text" name="juego">
                <button class="btn btn-dark" type="submit">BUSCAR</button>
            </form>
        </div>
        <style>
            .form-container {
                display: flex;
                gap: 20px;
            }
        </style>
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
            {{ $juegos->links() }}
        </div>
       
    </div>
@endsection
