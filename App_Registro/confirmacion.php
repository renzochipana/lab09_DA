<?php
// Obtener los datos enviados por el formulario
$nombreCompleto = $_POST['nombreCompleto'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$sexo = $_POST['sexo'];
$temasInteres = isset($_POST['temasInteres']) ? implode(", ", $_POST['temasInteres']) : 'Ninguno';
$aficiones = isset($_POST['aficiones']) ? implode(", ", $_POST['aficiones']) : 'Ninguna';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación del Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Confirmación del Registro de Usuario</h1>
    <table border="1">
        <tr>
            <th>Nombre completo</th>
            <td><?php echo htmlspecialchars($nombreCompleto); ?></td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td><?php echo htmlspecialchars($direccion); ?></td>
        </tr>
        <tr>
            <th>Correo electrónico</th>
            <td><?php echo htmlspecialchars($correo); ?></td>
        </tr>
        <tr>
            <th>Contraseña</th>
            <td><?php echo htmlspecialchars($password); ?></td>
        </tr>
        <tr>
            <th>Fecha de nacimiento</th>
            <td><?php echo htmlspecialchars(date("d/F/Y", strtotime($fechaNacimiento))); ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?php echo htmlspecialchars($sexo); ?></td>
        </tr>
        <tr>
            <th>Temas de interés</th>
            <td><?php echo htmlspecialchars($temasInteres); ?></td>
        </tr>
        <tr>
            <th>Aficiones seleccionadas</th>
            <td><?php echo htmlspecialchars($aficiones); ?></td>
        </tr>
    </table>
    <button onclick="window.history.back()">Confirmar datos</button>
</body>
</html>