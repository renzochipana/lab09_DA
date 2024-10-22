<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción de Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Formulario de Inscripción de Usuarios</h1>
    <form action="confirmacion.php" method="POST">
        <!-- Nombre completo -->
        <label for="nombreCompleto">Nombre completo:</label>
        <input type="text" id="nombreCompleto" name="nombreCompleto" required><br>

        <!-- Dirección -->
        <label for="direccion">Dirección:</label>
        <textarea id="direccion" name="direccion" required></textarea><br>

        <!-- Correo Electrónico -->
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br>

        <!-- Contraseña -->
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>

        <!-- Confirmar Contraseña -->
        <label for="confPassword">Confirmar contraseña:</label>
        <input type="password" id="confPassword" name="confPassword" required><br>

        <!-- Fecha de Nacimiento -->
        <label for="fechaNacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br>

        <!-- Sexo -->
        <label>Sexo:</label>
        <input type="radio" id="hombre" name="sexo" value="Hombre" required>
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer" required>
        <label for="mujer">Mujer</label><br>

        <!-- Temas de Interés -->
        <label>Por favor, elige los temas de interés:</label><br>
        <input type="checkbox" id="ficcion" name="temasInteres[]" value="Ficción">
        <label for="ficcion">Ficción</label>
        <input type="checkbox" id="terror" name="temasInteres[]" value="Terror">
        <label for="terror">Terror</label>
        <input type="checkbox" id="accion" name="temasInteres[]" value="Acción">
        <label for="accion">Acción</label>
        <input type="checkbox" id="comedia" name="temasInteres[]" value="Comedia">
        <label for="comedia">Comedia</label><br>

        <!-- Aficiones -->
        <label for="aficiones">Selecciona tus aficiones:</label>
        <select id="aficiones" name="aficiones[]" multiple>
            <option value="Deporte">Deporte</option>
            <option value="Música">Música</option>
            <option value="Fotografía">Fotografía</option>
        </select><br>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>