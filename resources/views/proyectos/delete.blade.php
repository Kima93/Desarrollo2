<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <div class="container">
        <h2>Eliminar Proyecto</h2>
        <p>¿Estás seguro de que deseas eliminar el proyecto <strong>{{ $proyecto->nombre }}</strong>?</p>
        <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>


