<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar y Ver Archivos</title>
</head>
<body>
    <h1>Cargar Archivo</h1>
    <!-- Formulario para subir archivos -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="especialidad">Especialidad:</label>
        <select name="especialidad" id="especialidad">
            <option value="Estadistica">Estadística</option>
            <option value="DesarrolloWeb">Desarrollo Web</option>
            <option value="Testing">Testing</option>
        </select>
        <br><br>
        <label for="archivo">Seleccionar archivo:</label>
        <input type="file" name="archivo" id="archivo" required>
        <br><br>
        <input type="submit" value="Subir archivo">
    </form>

    <hr>

    <h2>Archivos Subidos</h2>
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
        echo "<form method='get' action=''>";
        echo "<label for='archivo_id'>Selecciona un archivo para ver su contenido:</label><br>";
        echo "<select name='archivo_id' id='archivo_id'>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . " (" . $row['especialidad'] . ")</option>";
        }

        echo "</select><br><br>";
        echo "<input type='submit' value='Ver archivo'>";
        echo "</form>";
    } else {
        echo "No hay archivos subidos.";
    }

    $conn->close();
    ?>

    <hr>

    <?php

    if (isset($_GET['archivo_id'])) {
        $archivo_id = $_GET['archivo_id'];


        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }


        $sql = "SELECT ruta FROM archivos WHERE id = $archivo_id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $ruta_archivo = $row['ruta'];


            if (file_exists($ruta_archivo)) {
                $contenido = file_get_contents($ruta_archivo);
                echo "<h2>Contenido del archivo:</h2>";
                echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
            } else {
                echo "El archivo no existe.";
            }
        } else {
            echo "Archivo no encontrado.";
        }

        $conn->close();
    }
    ?>
</body>
</html>
