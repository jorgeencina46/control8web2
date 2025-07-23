<?php
include("conexion.php");
$sql = "
    SELECT p.nombre, COUNT(d.id_donacion) AS total_donaciones, SUM(d.monto) AS monto_total
    FROM DONACION d
    JOIN PROYECTO p ON d.id_proyecto = p.id_proyecto
    GROUP BY d.id_proyecto
    HAVING COUNT(d.id_donacion) > 2";

$result = $conn->query($sql);

echo "<h2>Proyectos con más de 2 donaciones</h2><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li><strong>{$row['nombre']}</strong>: {$row['total_donaciones']} donaciones - Total: \${$row['monto_total']}</li>";
}
echo "</ul>";
?>







