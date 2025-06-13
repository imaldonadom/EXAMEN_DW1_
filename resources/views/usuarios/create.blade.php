<!-- resources/views/usuarios/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label>RUT:</label>
        <input type="text" name="rut" required><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label>Email (@ventasfix.cl):</label>
        <input type="email" name="email" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
