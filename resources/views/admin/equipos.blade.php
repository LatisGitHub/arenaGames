@extends('admin.layout')


@section('main')
    <div class="form-container mt-3" style="margin-left: 34%">
        <form method="POST" action='/equipo/buscarEstado' enctype="multipart/form-data">
            @csrf
            <label for="estado" style="font-weight: bold">ESTADO</label>
            <select name="estado" class="block mt-1 w-full">
                <option value="abierto">ABIERTO</option>
                <option value="cerrado">CERRADO</option>
            </select>
            <button class="btn btn-primary" type="submit">BUSCAR</button>
        </form>

        <form method="POST" action='/equipo/buscarModalidad' enctype="multipart/form-data">
            @csrf
            <label for="modalidad" style="font-weight: bold">MODALIDAD</label>
            <select name="modalidad" class="block mt-1 w-full">
                <option value="1">1 VS 1</option>
                <option value="2">2 VS 2</option>
                <option value="3">3 VS 3</option>
                <option value="4">4 VS 4</option>
                <option value="5">5 VS 5</option>
            </select>
            <button class="btn btn-primary" type="submit">BUSCAR</button>
        </form>
    </div>

    <style>
        .form-container {
            display: flex;
            gap: 20px;
        }
    </style>
    <div class="mx-4 my-5">
        <h1 style="text-align: center" class="text-primary"> EQUIPOS</h1>
        <a href="/equipos/nuevo/nuevo" class="btn btn-secondary mb-5">Nuevo Equipo</a>

        <table class='table table-striped' style='font-size: 15px;align-items: center;' id='dataTable' width='100%'
            cellspacing='0'>
            <tr>
                <th> NOMBRE </th>
                <th> IMAGEN </th>
                <th> MODALIDAD </th>
                <th> ESTADO </th>
                <th class="text-center"> DETALLE </th>
                <th class="text-center"> ELIMINAR </th>
            </tr>
            @foreach ($equipos as $equipo)
                <tr>
                    <td>
                        <p style="font-weight: bold">{{ strtoupper($equipo->nombre) }}</p>
                    </td>
                    <td>
                        <img class="img-responsive" width='200px' height="200px" src="{{ asset($equipo->imagen) }}" />
                    </td>
                    <td>
                        <p>{{ $equipo->modalidad . ' VS ' . $equipo->modalidad }}</p>
                    </td>
                    <td>
                        <p style="font-weight: bold">{{ strtoupper($equipo->estado) }}</p>
                    </td>
                    <td class="text-center"> <a href="/equipos/{{ $equipo->id }}" class="text-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg></a> </td>
                    <td class="text-center"> <a class="text-danger" href="/equipos/{{ $equipo->id }}/borrar"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg></a>
                </tr>
            @endforeach
        </table>
        {{ $equipos->links() }}
    </div>
@endsection
