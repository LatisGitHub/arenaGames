@extends('admin.layout')

@section('main')
    <x-guest-layout>
        <form action='/juegos/crear' enctype='multipart/form-data' method='POST'>
            @csrf
            <div>
                <x-input-label for="nombre" :value="__('NOMBRE')" />
                <input type="text" class="block mt-1 w-full" name="nombre">
            </div>
            <div>
                <x-input-label for="plataforma" :value="__('PLATAFORMA')" />
                <select name="plataforma" class="block mt-1 w-full">
                    <option value="pc">PC</option>
                    <option value="xbox">XBOX</option>
                    <option value="ps4">PS4</option>
                    <option value="ps5">PS5</option>
                </select>
            </div>
            <div>
                <x-input-label for="imagen" :value="__('IMAGEN')" />
                <input type='file' class="block mt-1 w-full" name='imagen' value='' />
            </div>
            <div>
                <x-input-label for="descripcion" :value="__('DESCRIPCION')" />
                <input type="text" class="block mt-1 w-full" name="descripcion">
            </div>
            <input style="border: 1px solid black; border-radius: 10px" class="mt-3 p-2" type='submit' name='enviar'
                texto='' value='CREAR' />
        </form>
    </x-guest-layout>
@endsection
