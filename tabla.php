<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "login";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcout icon" href="logo.png">
    <title>tabla de productos</title>
    <style>
        body{
            background-color: #F4C5D7;
            text-align: center;
        }
        table {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #F4C5D7;
            padding: 20px;
            border-radius: 5px;
            background-color: #cdb4db;
        }
        td{
            border: 1px solid black;
        }
    </style>
    </head>
    <body>
    <?php include 'encabezado.php' ; ?>
        <table>
            <tr>
                <td>id: </td>
                <td>nombre: </td>
                <td>categoria: </td>
                <td>precio: </td>
                <td>descripcion: </td>
                <td>color: </td>
                <td>genero: </td>
                <td>talla: </td>
            </tr>
            <?php
                $sql = "SELECT * from productos";
                $result = mysqli_query($conexion, $sql);

                while($mostrar = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['id']?></td>
                <td><?php echo $mostrar['nombre']?></td>
                <td><?php echo $mostrar['categoria']?></td>
                <td><?php echo $mostrar['precio']?></td>
                <td><?php echo $mostrar['descripcion']?></td>
                <td><?php echo $mostrar['color']?></td>
                <td><?php echo $mostrar['genero']?></td>
                <td><?php echo $mostrar['talla']?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <?php include 'pie.php' ; ?>
    </body>
</html>