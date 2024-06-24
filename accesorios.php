<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcout icon" href="logo.png">
	<title>Accesorios</title>
    <style>
        body {
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            background-color: #A17A69;
            flex-direction: column; 
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 60px;
            justify-content: center;
            margin-top: 20px; 
        }

        .card {
            width: 290px;
            height: 354px;
            padding: .8em;
            background: #B5927F;
            position: relative;
            overflow: visible;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            margin-bottom: 20px;
            color: #DABCB2;
        }

        .card-img {
            display: block;
            margin: 0 auto;
            background-color: #ffcaa6;
            height: 30%;
            width: 50%;
            border-radius: .5rem;
            transition: .3s ease;
        }

        .card-info {
            padding-top: 45%;
        }

        svg {
            width: 20px;
            height: 20px;
        }

        .card-footer {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
            border-top: 1px solid #ddd;
        }

        .text-title {
            font-weight: 900;
            font-size: 1.5em;
            line-height: 1.5;
        }

        .text-body {
            font-size: .9em;
            padding-bottom: 5px;
        }

        .card-button {
            border: 1px solid #252525;
            display: flex;
            padding: .3em;
            cursor: pointer;
            border-radius: 50px;
            transition: .3s ease-in-out;
        }

        .card-img:hover {
            transform: translateY(-25%);
            box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
        }

        .card-button:hover {
            border: 1px solid #ffcaa6;
            background-color: #ffcaa6;
        }

      
        footer {
            text-align: center;
            margin-top: 20px; 
        }
    </style>
</head>
<body>
<?php include 'encabezado.php' ; ?>

<div class="card-container">

<?php

$cards = [
[
'image' => '1.jpeg',
'title' => ' Reloj cuarzo $550.00',
'description' => ' Reloj cuarzo con fecha de puntero redondo & 1 pieza Pulsera.'
],
[
'image' => '2.jpeg',
'title' => ' Gafas decorativas $350.00',
'description' => ' Gafas decorativas geométricas metálicas de la moda.'
],
[
'image' => '3.jpeg',
'title' => ' anillos texturizados $170.00',
'description' => ' 3 anillos texturizados para hombre.'
],
[
'image' => '4.jpeg',
'title' => '  Collar de serpiente $140.00',
'description' => ' Collar de serpiente quadrado masculino con estampa de dragón chino.'
],
[
'image' => '5.jpeg',
'title' => ' Gorra de béisbol $260.00',
'description' => ' Gorra de béisbol con diseño de cadena.'
],
[
'image' => '6.jpeg',
'title' => ' Collar de estrella $215.00',
'description' => ' 2 piezas Collar accesorio de estrella.'
],
[
'image' => '7.jpeg',
'title' => '  Anillo con abertura con estrella $190.00',
'description' => ' 3 piezas Anillo con abertura con estrella.'
],
[
'image' => '8.jpeg',
'title' => ' Collar occidental $150.00',
'description' => ' Hombres Collar con accesorio occidental dragón & espada.'
],
];

foreach ($cards as $card) {
    echo '<div class="card">';
    echo '<div class="card-img">';
    echo '<img src="' . $card['image'] . '" width="100%" alt="Imagen">';
    echo '</div>';
    echo '<div class="card-info">';
    echo '<div class="text-title">' . $card['title'] . '</div>';
    echo '<div class="text-body">' . $card['description'] . '</div>';
    echo '</div>';
    echo '<div class="card-footer">';
    echo '<div class="card-button">Añadir</div>';
    echo '<svg><!-- Aquí puedes poner tu SVG --></svg>';
    echo '</div>';
    echo '</div>';
}
?>
<?php include 'pie.php' ; ?>
</div>
</body>
</html>