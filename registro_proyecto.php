<h2>Registro de Proyecto</h2>
<form method="POST" onsubmit="return validarProyecto();">
    <input type="text" name="nombre" placeholder="Nombre del proyecto" required>
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <input type="number" name="presupuesto" placeholder="Presupuesto" required>
    <input type="date" name="fecha_inicio" required>
    <input type="date" name="fecha_fin" required>
    <button type="submit" name="guardar">Guardar Proyecto</button>
</form>

<script>
function validarProyecto() {
    const nombre = document.querySelector('[name="nombre"]').value;
    if (nombre.length < 3) {
        alert("El nombre debe tener al menos 3 caracteres.");
        return false;
    }
    return true;
}
</script>
<?php
include("conexion.php");
if (isset($_POST['guardar'])) {
    $stmt = $conn->prepare("INSERT INTO PROYECTO (nombre, descripcion, presupuesto, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdss", $_POST['nombre'], $_POST['descripcion'], $_POST['presupuesto'], $_POST['fecha_inicio'], $_POST['fecha_fin']);
    $stmt->execute();
    echo "Proyecto guardado correctamente.";
}
?>
