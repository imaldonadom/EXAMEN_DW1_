@extends('layouts.app')

@section('contenido')
  <h3 class="mb-4">Listado de Productos</h3>

  <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear nuevo producto</a>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>SKU</th>
        <th>Nombre</th>
        <th>Precio Neto</th>
        <th>Precio Venta</th>
        <th>Stock Actual</th>
      </tr>
    </thead>
    <tbody>
      @forelse($productos as $producto)
        <tr>
          <td>{{ $producto->id }}</td>
          <td>{{ $producto->sku }}</td>
          <td>{{ $producto->nombre }}</td>
          <td>{{ $producto->precio_neto }}</td>
          <td>{{ $producto->precio_venta }}</td>
          <td>{{ $producto->stock_actual }}</td>
        </tr>
      @empty
        <tr>
          <td colspan="6">No hay productos registrados.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection
