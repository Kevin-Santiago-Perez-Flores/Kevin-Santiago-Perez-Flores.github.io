-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2024 a las 05:41:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `talla` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `precio`, `descripcion`, `color`, `genero`, `talla`) VALUES
(1, 'Sophie Dress', 'Vestido', '$600.00', 'Vestido Corto', 'Azul Marino', 'Mujer', 'XCH/CH/M/G/EG'),
(2, 'Gala Gown', 'Vestido', '$490.00', 'Vestido Corto/Mangas Largas', 'Azul Cielo', 'Mujer', 'XCH/CH/M/G/EG'),
(3, 'Eve Gown', 'Conjunto', '$800.00', 'Top/Pantalon Acampanado', 'Beige ', 'Mujer', 'XCH/CH/M/G/EG'),
(4, 'Silk Slip Dress', 'Vestido ', '$650.00', 'Vestido Corto', 'Blanco', 'Mujer', 'XCH/CH/M/G/EG'),
(5, 'Satin Sheath Dress', 'Conjunto', '$560.00', 'Top/Falda', 'Blanco', 'Mujer', 'XCH/CH/M/G/EG'),
(6, 'Lace Cocktail Dress', 'Conjunto', '$700.00', 'Top Asimetrico/ Falda Abierto Pierna', 'Rojo', 'Mujer', 'XCH/CH/M/G/EG'),
(7, 'Sequined Mini Dress', 'Vestido', '$600.00', 'Vestido Largo Abierto pierna', 'Rojo', 'Mujer', 'XCH/CH/M/G/EG'),
(8, 'Velvet Bodycon Dress', 'Vestido', '$590.00', 'Vestido Largo', 'Rosa', 'Mujer', 'XCH/CH/M/G/EG'),
(9, 'Sequined Mini Dress', 'Conjunto', '$550.00', 'Blusa Manga Larga/ Falda Corta', 'Beige ', 'Mujer', 'XCH/CH/M/G/EG'),
(10, 'Lace Cocktail Dress', 'Vestido', '$890.00', 'Vestido Largo Abierto pierna', 'Negro', 'Mujer', 'XCH/CH/M/G/EG'),
(11, 'Satin Sheath Dress', 'Vestido', '$690.00', 'Vestido Largo Abierto pierna', 'Negro', 'Mujer', 'XCH/CH/M/G/EG'),
(12, 'Silk Slip Dress', 'Vestido', '$450.00', 'Vestido Corto', 'Blanco', 'Mujer', 'XCH/CH/M/G/EG'),
(13, 'Stylish Reverie', 'Camisa/Pantalon', '$750.00', 'Camisa Manga Larga', 'Camisa Blanca/Pantalon Khaki', 'Hombre', 'XCH/CH/M/G/EG'),
(14, 'Starboy Elegance', 'Sudadera/Blusa/Pantalon', ' $890.00 ', 'Sudadera Manga Larga/Blusa Manga Corta', 'Sudadera Azul Marino/Blusa Azul/Pantalon Blanco ', 'Hombre', 'XCH/CH/M/G/EG'),
(15, 'Vintage Chic', 'Sudadera/Camisa/Pantalon', '$1,100.00', 'Sudadera Rayas/Camisa Manga Larga', 'Sudadera Rayada Azul-Blanco/Blusa Blanco /Pantalon', 'Hombre', 'XCH/CH/M/G/EG'),
(16, 'Timless Glamour', 'Sudadera/Camisa/Pantalon', '$1,240.00', 'Sudadera Manga Larga/Camisa 3/4', 'Sudadera Azul Marino/Camisa Blanca/Pantalon Mezcli', 'Hombre', 'XCH/CH/M/G/EG'),
(17, 'Classic Elegance', 'Sudadera/Camisa/Pantalon', '$1,100.00', 'Sudadera Manga Larga/Camisa Manga Larga', 'Sudadera Beige/Camisa Manta Beige/Pantalon Blanco', 'Hombre', 'XCH/CH/M/G/EG'),
(18, 'Starboy Chic', 'Pantalon/Blusa', '$990.00', 'Blusa Manga Corta', 'Pantalon Negro/Blusa Manta Negra', 'Hombre', 'XCH/CH/M/G/EG'),
(19, 'Sophisticated Edge', 'Sudadera/Camisa/Pantalon', '$1,200.00', 'Sudadera Manga Larga/Camisa Manga Larga', 'Pantalon Negro/Blusa Manta Negra/Pantalon Beige', 'Hombre', 'XCH/CH/M/G/EG'),
(20, 'Elegancia Sofisticada', 'Sudadera/Camisa/Pantalon', '$1,090.00', 'Sudadera Manga Larga/Camisa Manga Larga', 'Sudadera Azul Marino/Camisa Blanca/Pantalon Manta ', 'Hombre', 'XCH/CH/M/G/EG'),
(21, 'Glamour Atemporal', 'Camisa/Pantalon', '$750.00', 'Camisa Manga Larga/Camisa Manga Larga', 'Camisa Azul Cielo/Pantalon Beige', 'Hombre', 'XCH/CH/M/G/EG'),
(22, 'Elegancia Clasica', 'Sudadera/Pantalon', '$890.00', 'Sudadera Manga Larga', 'Sudadera Azul Mrino/Pantalon Mezclilla', 'Hombre', 'XCH/CH/M/G/EG'),
(23, 'Chic Vintage', 'Camisa/Pantalon', '$690.00', 'Camisa 3/4', 'Camisa Blanca/Pantalon Khaki', 'Hombre', 'XCH/CH/M/G/EG'),
(24, 'Estilo Starboy', 'Blusa/Pantalon/Saco', '$750.00', 'Blusa Manga Corta', 'Blusa Negra/Pantalon Negro/Saco Negro', 'Hombre', 'XCH/CH/M/G/EG'),
(25, 'Reloj Cuarzo', 'Acessorio', '$550.00', 'Fecha de Puntero Redondo y Una Pulsera', 'Negro', 'Hombre', 'unitalla'),
(26, 'Gafas', 'Acessorio', '$350.00', 'Figura GeometricaMetalica ', 'Negro', 'Hombre', 'unitalla'),
(27, 'Anillos Texturizados', 'Acessorio', '$170.00', '3 anillos Texturizados', 'Plateado', 'Hombre', 'unitalla'),
(28, 'Collar Serpiente', 'Acessorio', '$140.00', 'Collar de Serpiente', 'Plateado', 'Hombre', 'unitalla'),
(29, 'Gorra Beisbol', 'Acessorio', '$260.00', 'Gorra Con Cadena', 'Negro', 'Hombre', 'unitalla'),
(30, 'Collar Estrella', 'Acessorio', '$210.00', '2 Collar Estrella', 'Plateado', 'Mujer', 'unitalla'),
(31, 'Anillo Abertura Estrella', 'Acessorio', '$190.00', '3 anillos con Estrellas', 'Plateado', 'Mujer', 'unitalla'),
(32, 'Collar Occidental', 'Acessorio', '$150.00', 'Acessorio Dragon y Espada', 'Plateado', 'Mujer', 'unitalla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `contraseña`, `numero`, `sexo`) VALUES
('1', 'flores.eleuterio.fernanda.44@cbtis118.edu.mx', 'cbtis118', '446 124 7729', 'femenino'),
('2', 'perez.flores.kevin.45@cbtis118.edu.mx', 'cbtis118', '4461235440', 'masculino'),
('3', 'rodriguez.salazar.cynthia.45@cbtis118.edu.mx', 'cbtis118', '4461064470', 'femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
