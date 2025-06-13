@extends('layouts.app')

@section('contenido')

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <h1>Listado de Usuarios</h1>

    <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear nuevo usuario</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Creado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->rut }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay usuarios registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
