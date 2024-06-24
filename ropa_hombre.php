<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcout icon" href="logo.png">
    <title>Menu Hombre</title>
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
        'image' => 'h1.png',
        'title' => 'Stylish Reverie $750',
        'description' => 'Camisa Blanca - Pantalón Khaki.'
    ],
    [
        'image' => 'h2.png',
        'title' => 'Starboy Elegance $890',
        'description' => 'Sudadera Azul Marino - Blusa Azul Cielo - Pantalón Blanco.'
    ],
    [
        'image' => 'h3.png',
        'title' => 'Vintage Chic $1100',
        'description' => 'Sudadera Rayas Azul - Camisa Blanca - Pantalón Khaki.'
    ],
    [
        'image' => 'h4.png',
        'title' => 'Timeless Glamour $1240',
        'description' => 'Sudadera Negra - Camisa Beige - Pantalón Mezclilla.'
    ],
    [
        'image' => 'h5.png',
        'title' => 'Classic Elegance $1100',
        'description' => 'Sudadera Beige - Camisa Manta Beige - Pantalón Blanco.'
    ],
    [
        'image' => 'h6.png',
        'title' => 'Starboy Chic $990',
        'description' => 'Pantalón Vestir Negro - Blusa Manta Blanca.'
    ],
    [
        'image' => 'h7.png',
        'title' => 'Sophisticated Edge $1200',
        'description' => 'Sudadera Negra - Camisa Azul - Pantalón Beige.'
    ],
    [
        'image' => 'h8.png',
        'title' => 'Elegancia Sofisticada $1090',
        'description' => 'Sudadera Azul Marino - Camisa Blanco - Pantalón Manta Blanco.'
    ],
    [
        'image' => 'h9.png',
        'title' => 'Glamour Atemporal $750',
        'description' => 'Camisa Azul Cielo - Pantalón Beige.'
    ],
    [
        'image' => 'h10.png',
        'title' => 'Elegancia Clásica $890',
        'description' => 'Sudadera Azul Marino - Pantalón Mezclilla.'
    ],
    [
        'image' => 'h11.png',
        'title' => 'Chic Vintage $690',
        'description' => 'Camisa Blanca - Pantalón Khaki.'
    ],
    [
        'image' => 'h12.png',
        'title' => 'Estilo Starboy $750',
        'description' => 'Blusa Negra - Pantalón Negro - Saco Negro.'
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