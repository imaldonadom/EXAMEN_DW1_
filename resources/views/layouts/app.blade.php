<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Administración</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Estilos Vuexy -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>

<body>
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <aside id="layout-menu" class="layout-menu menu-vertical">
        <!-- Aquí puedes dejar el menú original de Vuexy o customizar -->
      </aside>

    <div class="layout-page">
    <!-- Navbar -->
    <nav class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="container-fluid">
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <span class="fw-bold">VentasFix Admin</span>
        </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
        @yield('contenido')
        </div>
    </div>
    </div>


  <!-- Scripts Vuexy -->
  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
