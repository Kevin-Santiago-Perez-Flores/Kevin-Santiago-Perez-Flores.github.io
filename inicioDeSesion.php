<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcout icon" href="logo.png">
        <title>Formulario</title>
        <style>
        body{
            background-color: #F4C5D7;
            text-align: center;
        }
        .div {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #F4C5D7;
            padding: 20px;
            border-radius: 5px;
            background-color: #cdb4db;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            box-sizing: border-box; 
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .button{
            background-color: pink;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 3px;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
    </head>
    <body>
    <?php include 'encabezado.php' ; ?>
    <div class="div">

    <form action="validar.php"name="progra" method="post">

    <input type="email" name="correo" placeholder="correo">
    <input type="text" name="contraseña" placeholder="contraseña">
    <input type="text" name="numero" placeholder="numero">
    <input type="text" name="sexo" placeholder="sexo">

    <input type="submit" name="registro" class="button">
    <input type="reset" class="button">

    </form>
    </div>
    <?php include 'pie.php' ; ?>
    </body>
</html>