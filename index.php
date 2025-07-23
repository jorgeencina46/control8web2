
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Donaciones - Organización</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        .contenedor {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            max-width: 400px;
            margin: auto;
            margin-top: 40px;
        }

        .boton {
            display: block;
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #3498db, #2980b9);
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .boton:hover {
            background: linear-gradient(to right, #2980b9, #1c5980);
            transform: scale(1.02);
        }
    </style>
</head>
<body>
    <h1>Gestión de Donaciones</h1>
    <div class="contenedor">
        <a class="boton" href="registro_proyecto.php">➕ Registrar Proyecto</a>
        <a class="boton" href="registro_donante.php">🙋 Registrar Donante</a>
        <a class="boton" href="registro_donacion.php">💰 Registrar Donación</a>
        <a class="boton" href="consulta_donaciones.php">📊 Ver Donaciones por Proyecto</a>
        <a class="boton" href="reporte_donaciones.php">📈 Reporte de Proyectos con más de 2 Donaciones</a>
    </div>
</body>
</html>
