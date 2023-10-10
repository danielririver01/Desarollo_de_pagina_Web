<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" /> <!-- Especifica la codificación de caracteres -->
    <title>Rio Web</title> <!-- Define el título de la página -->
    <link rel="stylesheet" href="./style.css" /> <!-- Enlaza la hoja de estilo CSS -->
</head>
<body>
    <div class="container flex"> <!-- Contenedor principal de la página -->
        <div class="riosucio-page flex"> <!-- Contenedor secundario con clase "riosucio-page" -->
            <div class="text">
                <h1>Rio Web</h1> <!-- Título principal de la página -->
                <p>Juega con amigos y con el mundo</p> <!-- Descripción de la página -->
                <p>desde Rio web, tu sitio de confianza.</p> <!-- Descripción adicional -->
            </div>
            <form action="../php/login_usuario_be.php" method="POST" class="formulario__login">
                <input type="email" name="correo" placeholder="correo electronico" required />
                <!-- Campo de entrada para el correo electrónico -->
                
                <input type="password" name="contrasena" placeholder="contraseña" required />
                <!-- Campo de entrada para la contraseña -->
                
                <div class="link">
                    <button type="submit" class="login">Ingresar</button>
                    <!-- Botón para enviar el formulario de inicio de sesión -->
                    
                    <a href="#" class="forgot">¿Olvidaste tu contraseña?</a>
                    <!-- Enlace para recuperar la contraseña (actualmente no está vinculado a ninguna funcionalidad) -->
                </div>
                <hr /> <!-- Línea horizontal para separar elementos -->
                <div class="button">
                    <a href="../formulario.php">Crear un nuevo usuario</a>
                    <!-- Enlace para redirigir a la página de registro de usuario -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>
