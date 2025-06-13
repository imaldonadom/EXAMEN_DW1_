@extends('layouts.app')

@section('contenido')
  <h3 class="mb-4">Crear nuevo Cliente</h3>

  <form action="{{ route('clientes.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="rut" class="form-label">RUT</label>
      <input type="text" name="rut" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" name="apellido" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Guardar Cliente</button>
  </form>
@endsection
