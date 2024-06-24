<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unique Style</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Elsie&display=swap">
    <link rel="shortcout icon" href="logo.png">
    <style>
        body {
            font-family: 'Elsie', serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: white;
            color: violet;
            padding: 20px 0;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .container {
            padding: 20px;
        }

       
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="header">
        
            <h1>Unique Style</h1>
        </div>
    </header>
</body>
</html>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

nav {
    background-color: pink;
    overflow: hidden;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: violet;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: violet;
}

.content {
    padding: 16px;
}
</style>

<link rel="shortcout icon" href="logo.png">

<?php
$menuItems = [
    "Inicio" => "index.php",
    "Accesorios" => "accesorios.php",
    "Ropa" => [
        "Mujer" => "ropa_mujer.php",
        "Hombre" => "ropa_hombre.php",
       
    ],
    "usuarios" => "usuarios.php",
    "tabla " => "tabla.php"
];

function generateMenu($items) {
    echo '<nav><ul>';
    foreach ($items as $item => $link) {
        if (is_array($link)) {
            echo '<li class="dropdown">';
            echo '<a href="javascript:void(0)" class="dropbtn">' . $item . '</a>';
            echo '<div class="dropdown-content">';
            foreach ($link as $subItem => $subLink) {
                echo '<a href="' . $subLink . '">' . $subItem . '</a>';
            }
            echo '</div></li>';
        } else {
            echo '<li><a href="' . $link . '">' . $item . '</a></li>';
        }
    }
    echo '</ul></nav>';
}

generateMenu($menuItems);
?>
<img src="Unique Style.png" width="100%">

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
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Unique Style</h3>
                <h6>ATENCIÓN A CLIENTES</h6>
                <p>flores.fernanda.45@cbtis118.edu.mx</p>
                <p>rodriguez.cynthia.45@cbtis118.edu.mx</p>
                <p>perez.flores.kevin.45@cbtis118.edu.mx</p>
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