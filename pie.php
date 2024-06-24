<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Sitio Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .footer {
            position: relative;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: pink;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            margin: 10px;
            min-width: 200px;
        }

        .footer-section h4, .footer-section h3, .footer-section h6 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p {
            margin: 5px 0;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
             background-color: violet;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            border-top: 1px solid violet;
            padding-top: 10px;
        }

        .social-icon {
            width: 24px;
            height: 24px;
            vertical-align: middle;
            margin-right: 8px;
        }
</style>
</head>
<body>
    <!-- Contenido de la página -->

    <!-- Pie de Página -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Unique Style</h3>
                <h6>ATENCIÓN A CLIENTES</h6>
                <p>flores.fernanda@cbtis118.edu.mx</p>
                <p>rodriguez.cynthia@cbtis118.edu.mx</p>
                <p>perez.flores.kevin@cbtis118.edu.mx</p>
                <p>4461246727</p>
            </div>
            <div class="footer-section">
                <h4>Sobre Nosotros</h4>
                <p><a href="historia.php">Nuestra Historia</a></p>
                <p><a href="mision.php">Misión y Visión</a></p>
            </div>
            <div class="footer-section">
                <h4>Síguenos</h4>
                <p><a href="https://www.facebook.com"><img class="social-icon" src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="Facebook">Facebook</a></p>
                <p><a href="https://www.instagram.com"><img class="social-icon" src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="Instagram">Instagram</a></p>
                <p><a href="https://www.twitter.com"><img class="social-icon" src="https://cdn-icons-png.flaticon.com/512/124/124021.png" alt="Twitter">Twitter</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Creado por alumnos del CBTIS 118 4BMPR</p>
        </div>
    </footer>
</body>
</html>
