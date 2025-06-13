@extends('layouts.app')

@section('contenido')
  <h3 class="mb-4">Listado de Usuarios</h3>

  <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear nuevo usuario</a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>RUT</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Creado</th>
        <th>Acciones</th>
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
          <td>
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>

            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"
                onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">Eliminar</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="7">No hay usuarios registrados.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
