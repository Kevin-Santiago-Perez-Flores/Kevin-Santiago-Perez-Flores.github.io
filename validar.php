<?php
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $numero = $_POST['numero'];
    $sexo = $_POST['sexo'];

    session_start();
    $_SESSION['correo'] = $correo;

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "login";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?");
    $stmt->bind_param("ss", $correo, $contraseña);

    $stmt->execute();

    $resultado = $stmt->get_result();
    $filas = $resultado->num_rows;

    if ($filas > 0) {
        header("Location: menu.php");
    } else {
        include("inicioDeSesion.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }

    $resultado->free();
    $stmt->close();
    $conexion->close();
?>
