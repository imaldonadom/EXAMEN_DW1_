@extends('layouts.app')

@section('contenido')
  <h3 class="mb-4">Listado de Clientes</h3>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Crear nuevo cliente</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>RUT</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($clientes as $cliente)
        <tr>
          <td>{{ $cliente->id }}</td>
          <td>{{ $cliente->rut }}</td>
          <td>{{ $cliente->nombre }}</td>
          <td>{{ $cliente->apellido }}</td>
          <td>{{ $cliente->email }}</td>
          <td>
            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-warning">Editar</a>
            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6">No hay clientes registrados.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection
