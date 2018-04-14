-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-04-2018 a las 16:40:19
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albumdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_img` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pwd`, `user_img`) VALUES
(1, 'Luis', 'canateluisalfonso@gmail.com', 'luisalfonso0730', 'imgprueba'),
(2, 'Universidad del Norte', 'canatel@uninorte.edu.co', 'sdfad', '1523117931.png'),
(3, 'Universidad del Norte', 'canatel@uninorte.edu.co', 'sdfad', '1523117989.png'),
(4, 'Universidad del Norte', 'canatel@uninorte.edu.co', '677dfb18a28d617b40ede759d122d687', '1523118352.png'),
(5, 'Luis', 'canatel@uninorte.edu.co', '03cef081e40b206eb27cc02490f50975', '1523118422.jpg'),
(6, 'ASDFAWERA', 'canatel@uninorte.edu.co', 'eb69ff227193b23b4206880f09e0c45b', '1523119050.gif'),
(7, 'luis', 'luis@luis.com', '502ff82f7f1f8218dd41201fe4353687', '1523119974.jpg'),
(8, 'Luis', 'canatel@uninorte.edu.co', '5a30c66e0e10fd985df61ac9fceba388', '1523465770.jpg'),
(9, '\"luis', 'canatel@uninorte.edu.co', '4244439b43b633067d58fa2c4146bf58', '1523722338.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
