@extends('admin.layout')

@section('main')
<x-guest-layout>
    <form action='/equipos/store' enctype='multipart/form-data' method='POST'>
        @csrf
        <div>
        <x-input-label for="nombre" :value="__('NOMBRE')" />
        <input type='text'  class="block mt-1 w-full" name='nombre'/>
        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>
        <div>
        <x-input-label for="imagen" :value="__('IMAGEN')" />
        <input  class="block mt-1 w-full" type='file' name='imagen' value='' />
        </div>
        <div>
        <x-input-label for="modalidad" :value="__('MODALIDAD')" />
        <select name="modalidad" class="block mt-1 w-full">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        </div>
        <input type="hidden" name="estado" value="abierto">

        <input style="border: 1px solid black; border-radius: 10px" class="mt-3 p-2" type='submit' name='enviar' texto='' value='CREAR' />
    </form>
</x-guest-layout>
@endsection
