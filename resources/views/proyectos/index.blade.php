<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Proyectos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        h1 { color: #0a58ca; }
        table { border-collapse: collapse; width: 100%; margin-top: 1em; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f8f9fa; }
        a.button {
            display: inline-block; padding: 6px 12px; background-color: #0a58ca;
            color: white; text-decoration: none; border-radius: 4px;
        }
        .acciones a { margin-right: 5px; }
        .top-actions { margin-bottom: 1em; }
        .lista-simple { margin-top: 2em; }
    </style>
</head>
<body>
    <h1>Listado de Proyectos</h1>

    <div class="top-actions">
        <a href="/proyectos/create" class="button">➕ Nuevo Proyecto</a>
    </div>

    {{-- Tabla detallada --}}
    @if(count($proyectos) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Inicio</th><th>Estado</th><th>Responsable</th><th>Monto</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto['id'] }}</td>
                    <td>{{ $proyecto['nombre'] }}</td>
                    <td>{{ $proyecto['fecha_inicio'] }}</td>
                    <td>{{ $proyecto['estado'] }}</td>
                    <td>{{ $proyecto['responsable'] }}</td>
                    <td>${{ number_format($proyecto['monto'], 0, ',', '.') }}</td>
                    <td class="acciones">
                        <a href="/proyectos/{{ $proyecto['id'] }}" class="button">Ver</a>
                        <a href="/proyectos/{{ $proyecto['id'] }}/edit" class="button">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Lista simple adicional --}}
        <div class="lista-simple">
            <h2>Resumen en Lista</h2>
            <ul>
                @foreach ($proyectos as $proyecto)
                    <li>{{ $proyecto['nombre'] }} - {{ $proyecto['estado'] }}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p>No hay proyectos registrados.</p>
    @endif
</body>
</html>


