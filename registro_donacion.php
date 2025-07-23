<?php
include("conexion.php");
$proyectos = $conn->query("SELECT id_proyecto, nombre FROM PROYECTO");
$donantes = $conn->query("SELECT id_donante, nombre FROM DONANTE");
?>

<form method="POST">
    <select name="id_proyecto">
        <?php while($p = $proyectos->fetch_assoc()): ?>
            <option value="<?= $p['id_proyecto'] ?>"><?= $p['nombre'] ?></option>
        <?php endwhile; ?>
    </select>

    <select name="id_donante">
        <?php while($d = $donantes->fetch_assoc()): ?>
            <option value="<?= $d['id_donante'] ?>"><?= $d['nombre'] ?></option>
        <?php endwhile; ?>
    </select>

    <input type="number" name="monto" placeholder="Monto donado" required>
    <input type="date" name="fecha" required>
    <button type="submit" name="donar">Registrar Donación</button>
</form>
<?php
if (isset($_POST['donar'])) {
    $stmt = $conn->prepare("INSERT INTO DONACION (monto, fecha, id_proyecto, id_donante) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("dsii", $_POST['monto'], $_POST['fecha'], $_POST['id_proyecto'], $_POST['id_donante']);
    $stmt->execute();
    echo "Donación registrada.";
}
?>
