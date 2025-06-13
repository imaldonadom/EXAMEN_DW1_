@extends('layouts.app')

@section('contenido')
  <h2 class="mb-4">Dashboard</h2>
  <div class="card p-4">
    <p>Bienvenido al panel principal del sistema VentasFix.</p>
    <p>Desde aquí puedes acceder a los módulos:</p>

    <div class="mt-3">
      <a href="{{ route('usuarios.index') }}" class="btn btn-primary me-2">Usuarios ({{ $totalUsuarios }})</a>
      <a href="{{ route('productos.index') }}" class="btn btn-success me-2">Productos ({{ $totalProductos }})</a>
      <a href="{{ route('clientes.index') }}" class="btn btn-warning">Clientes ({{ $totalClientes }})</a>
    </div>
  </div>
  <canvas id="graficoDashboard" width="400" height="150"></canvas>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('graficoDashboard').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Usuarios', 'Productos', 'Clientes'],
      datasets: [{
        label: 'Total Registrados',
        data: [{{ $totalUsuarios }}, {{ $totalProductos }}, {{ $totalClientes }}],
        backgroundColor: ['#6f42c1', '#198754', '#fd7e14']
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          precision: 0
        }
      }
    }
  });
</script>

@endsection

