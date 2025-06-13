@extends('layouts.app')

@section('contenido')
<h3>Editar Usuario</h3>

<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>RUT:</label>
    <input type="text" name="rut" value="{{ $usuario->rut }}" required><br>

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $usuario->nombre }}" required><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="{{ $usuario->apellido }}" required><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $usuario->email }}" required><br>

    <button type="submit">Actualizar</button>
</form>
@endsection
