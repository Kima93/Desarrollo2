<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        h1 { color: #0a58ca; }
        label, input, select { display: block; margin-top: 10px; width: 100%; max-width: 500px; }
        input[type=submit] { margin-top: 20px; background-color: #0a58ca; color: white; padding: 10px; border: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Crear Nuevo Proyecto</h1>
    <form method="POST" action="/proyectos">
        @csrf
        <label>Nombre del Proyecto:</label>
        <input type="text" name="nombre" required>
        <label>Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" required>
        <label>Estado:</label>
        <select name="estado">
            <option>Planificado</option>
            <option>En análisis</option>
            <option>En desarrollo</option>
        </select>
        <label>Responsable:</label>
        <input type="text" name="responsable" required>
        <label>Monto:</label>
        <input type="number" name="monto" required>
        <input type="submit" value="Guardar Proyecto">
    </form>
</body>
</html>


