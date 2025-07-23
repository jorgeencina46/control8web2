
<?php
include("conexion.php"); // Conexión a la base de datos ORGANIZACION

$query = "SELECT PROYECTO.nombre, COUNT(DONACION.id_donacion) AS total_donaciones,
    SUM(DONACION.monto) AS monto_total
    FROM DONACION
    JOIN PROYECTO ON DONACION.id_proyecto = PROYECTO.id_proyecto
    GROUP BY DONACION.id_proyecto
    HAVING COUNT(DONACION.id_donacion) > 2";

$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Donaciones</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Proyectos con más de 2 donaciones</h2>
    <table border="1" cellpadding="10" align="center">
        <tr>
            <th>Proyecto</th>
            <th>Cantidad de Donaciones</th>
            <th>Total Recaudado (USD)</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td><?= $row['total_donaciones'] ?></td>
            <td>$<?= number_format($row['monto_total'], 2) ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a class="volver" href="index.php">← Volver al menú principal</a>
</body>
</html>
