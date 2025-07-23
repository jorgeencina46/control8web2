<?php
$host = "localhost";
$user = "root";
$pass = "4114";
$db = "ORGANIZACION";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>