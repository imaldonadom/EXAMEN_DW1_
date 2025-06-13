@extends('layouts.app')

@section('contenido')
  <h3 class="mb-4">Editar Cliente</h3>

  <form action="{{ route('clientes.update', $cliente) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="rut" class="form-label">RUT</label>
      <input type="text" name="rut" class="form-control" value="{{ $cliente->rut }}" required>
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" name="apellido" class="form-control" value="{{ $cliente->apellido }}" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="{{ $cliente->email }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection
