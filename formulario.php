<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la escala inicial para dispositivos móviles -->
    <title>Formulario de Registro</title> <!-- Establece el título de la página -->
    <link rel="stylesheet" href="./CSS/estilos.css" /> <!-- Enlaza la hoja de estilo CSS -->
</head>

<body>

    <section class="form-register"> <!-- Sección del formulario con una clase -->
        <h4>Formulario registro</h4> <!-- Título del formulario -->
        <form action="php/registro_usuario_be.php" method = "post" class="formulario__register">
        <input class="controls" type="text" name="nombres" id="nombres" placeholder="su Nombre"required> <!-- Campo para ingresar nombres -->
        <input class="controls" type="text" name="apellidos" id="apellidos" placeholder=" su Apellidos"required> <!-- Campo para ingresar apellidos -->
        <input class="controls" type="email" name="correo" id="correo" placeholder="correo electronico"required> <!-- Campo para ingresar correo electrónico -->
        <input class="controls"type="text"name="usuario"id="usuario"placeholder="usuario"required><!--Campo para ingresar el nombre de usuario-->
        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="contraseña"required> <!-- Campo para ingresar contraseña -->
        <input type="checkbox" name="checkbox" id="checkbox"> <!-- Casilla de verificación para aceptar términos y condiciones -->
        <p>Estoy de acuerdo con<a href="#">Terminos y condiciones</a></p required> <!-- Texto de acuerdo con enlace a términos y condiciones -->
        <input class="botons" type="submit" value="Registrarse"> <!-- Botón de registro -->
     <p><a href="./Rio web/Rio Web.php">¿Ya tienes cuenta?</a></p> <!-- Texto con enlace a la página "Rio Web" -->
  
    </section>
    
    
</body>

</html>
