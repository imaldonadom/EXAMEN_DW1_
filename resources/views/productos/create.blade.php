@extends('layouts.app')

@section('contenido')
  <h3 class="mb-4">Crear nuevo Producto</h3>

  <form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="sku" class="form-label">SKU</label>
      <input type="text" name="sku" id="sku" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="precio_neto" class="form-label">Precio Neto</label>
      <input type="number" name="precio_neto" id="precio_neto" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="precio_venta" class="form-label">Precio Venta</label>
      <input type="number" name="precio_venta" id="precio_venta" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="stock_actual" class="form-label">Stock Actual</label>
      <input type="number" name="stock_actual" id="stock_actual" class="form-control" required>
    </div>

    <div class="mb-3">
  <label for="descripcion_corta" class="form-label">Descripción Corta</label>
  <textarea name="descripcion_corta" id="descripcion_corta" class="form-control"></textarea>
</div>


    <button type="submit" class="btn btn-success">Guardar Producto</button>
  </form>
@endsection
