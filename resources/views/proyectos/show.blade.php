<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        h1 { color: #0a58ca; }
        table { border-collapse: collapse; width: 50%; margin-top: 1em; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f8f9fa; width: 30%; }
    </style>
</head>
<body>
    <h1>Detalle del Proyecto</h1>
    @if ($proyecto)
    <table>
        <tr><th>ID</th><td>{{ $proyecto['id'] }}</td></tr>
        <tr><th>Nombre</th><td>{{ $proyecto['nombre'] }}</td></tr>
        <tr><th>Fecha de Inicio</th><td>{{ $proyecto['fecha_inicio'] }}</td></tr>
        <tr><th>Estado</th><td>{{ $proyecto['estado'] }}</td></tr>
        <tr><th>Responsable</th><td>{{ $proyecto['responsable'] }}</td></tr>
        <tr><th>Monto</th><td>${{ number_format($proyecto['monto'], 0, ',', '.') }}</td></tr>
    </table>
    @else
    <p>Proyecto no encontrado.</p>
    @endif
</body>
</html>