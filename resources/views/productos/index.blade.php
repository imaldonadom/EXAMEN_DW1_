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
          <td>
            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>

            <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
          </td>

        </tr>
      @empty
        <tr>
          <td colspan="7">No hay productos registrados.</td>
        </tr>
      @endforelse
    </tbody>

  </table>
@endsection
