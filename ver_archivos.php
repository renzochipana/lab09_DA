<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "gestion_archivos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, ruta, especialidad FROM archivos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Archivos Subidos</h1>";
    while($row = $result->fetch_assoc()) {
        echo "<p><a href='" . $row['ruta'] . "'>" . $row['nombre'] . " (" . $row['especialidad'] . ")</a></p>";
    }
} else {
    echo "No hay archivos subidos.";
}

$conn->close();
?>
