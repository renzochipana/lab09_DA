<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "gestion_archivos";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $especialidad = $_POST['especialidad'];
    $archivo = $_FILES['archivo']['name'];
    $ruta_destino = "uploads/" . $especialidad . "/" . basename($archivo);
    

    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_destino)) {
        $sql = "INSERT INTO archivos (nombre, ruta, especialidad) VALUES ('$archivo', '$ruta_destino', '$especialidad')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Archivo subido correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error al subir el archivo.";
    }
}

$conn->close();
?>
