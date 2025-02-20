<!-- resources/views/csv/import.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importar CSV</title>
</head>
<body>
    <h1>Importar archivo CSV</h1>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <!-- Formulario para subir el archivo CSV -->
    <form action="{{ route('csv.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Sube tu archivo CSV:</label>
        <input type="file" name="file" id="file" accept=".csv">
        <button type="submit">Importar</button>
    </form>
</body>
</html>
