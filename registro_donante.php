<h2>Registro de Donante</h2>
<form method="POST" onsubmit="return validarDonante();">
    <input type="text" name="nombre" placeholder="Nombre del donante" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="text" name="direccion" placeholder="Dirección" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <button type="submit" name="guardar">Guardar Donante</button>
</form>

<script>
function validarDonante() {
    const email = document.querySelector('[name="email"]').value;
    if (!email.includes("@")) {
        alert("Email no válido.");
        return false;
    }
    return true;
}
</script>
<?php
include("conexion.php");
if (isset($_POST['guardar'])) {
    $stmt = $conn->prepare("INSERT INTO DONANTE (nombre, email, direccion, telefono) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['nombre'], $_POST['email'], $_POST['direccion'], $_POST['telefono']);
    $stmt->execute();
    echo "Donante registrado exitosamente.";
}
?>
