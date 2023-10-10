<?php
include 'conexion_be.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("El correo electrónico ya existe en la base de datos");
        window.location = /formulario/formulario.php";
    </script>
    ';
    exit(); // Terminar la ejecución del script si el correo ya existe
}

// Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
        alert("Este usuario ya existe en la base de datos");
        window.location = "/formulario/formulario.php";
    </script>
    ';
    exit(); // Terminar la ejecución del script si el usuario ya existe
}

$query = "INSERT INTO usuarios(nombres, apellidos, correo, usuario, contrasena) 
          VALUES('$nombres', '$apellidos', '$correo', '$usuario', '$contrasena')";


$ejecutar = mysqli_query($conexion, $query);

mysqli_close($conexion);

if ($ejecutar) {
    // Mostrar alerta de registro exitoso y redireccionar
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "/formulario/formulario.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error al registrarse");
            window.location = "/formulario/formulario.php";
        </script>
    ';
}
?>
