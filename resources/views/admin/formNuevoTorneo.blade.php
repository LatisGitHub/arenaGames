@extends('admin.layout')

@section('main')
    <x-guest-layout>
        <form action='/torneos/store' enctype='multipart/form-data' method='POST'>
            @csrf
            <x-input-label for="nombre" :value="__('NOMBRE')" />
            <input class="block mt-1 w-full" type="text" name="nombre">
            <x-input-label for="fecha" :value="__('FECHA')" />
            <input class="block mt-1 w-full" type="datetime-local" name="fecha">
            <x-input-label for="max_equipos" :value="__('MAXIMO EQUIPOS')" />
            <select name="max_equipos" class="block mt-1 w-full">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <x-input-label for="modalidad" :value="__('MODALIDAD')" />
            <select name="modalidad" class="block mt-1 w-full">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <input type="hidden" name="estado" value="activo">
            <x-input-label for="nivel" :value="__('NIVEL')" />
            <select name="nivel" class="block mt-1 w-full">
                <option value="principiante">principiante</option>
                <option value="intermedio">intermedio</option>
                <option value="alto">alto</option>
            </select>
            <x-input-label for="juego_id" :value="__('juego_id')" />
            <select class="form-select" name="juego_id" class="block mt-1 w-full">
                @foreach ($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
            <input style="border: 1px solid black; border-radius: 10px" class="mt-3 p-2" type='submit' name='enviar' texto='' value='CREAR' />
        </form>
    </x-guest-layout>
@endsection
