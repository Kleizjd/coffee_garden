-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla springfield.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(120) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado_usuario` varchar(1) NOT NULL,
  `rolid` int(250) NOT NULL,
  `imagen_usuario` varchar(250) NOT NULL,
  `id_pregunta` int(11) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla springfield.usuarios: 8 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `password`, `email`, `estado_usuario`, `rolid`, `imagen_usuario`, `id_pregunta`, `respuesta`) VALUES
	(1, 'José Daniel', 'Grijalba', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'jose.jdgo97@gmail.com', 'A', 1, 'jose.jpg', 1, 'lucas'),
	(2, 'Juan David', 'Grijalba', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'juandgo1997@gmail.com', 'A', 3, 'juan.jpg', 1, 'simon'),
	(4, 'Diana', 'Aristizabal', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'diana.aristizabal@gmail.com', 'A', 3, 'diana.png', 1, 'cielo'),
	(9, 'Arley', 'Castano', '$2y$10$/AWJxM/m6Z6cm1YaUAvtJ.IRimLpiDUm.eMjrriPXtdwvHxJUG1BG', 'arley@gmail.com', 'A', 3, 'Arley.jpg', 1, 'sabe'),
	(71, 'Neji', 'hyuga', '$2y$10$eAat5ki8NiOPW2gTVfCYAuPztMmPPPgZYlc5vEtlsA0rIYYb1Gt.y', 'neji@gmail.com', 'A', 2, 'naruto_neji_hyuga-71.jpg', 1, 'anime'),
	(72, 'Eren', 'Yeager', '$2y$10$eAat5ki8NiOPW2gTVfCYAuPztMmPPPgZYlc5vEtlsA0rIYYb1Gt.y', 'eren@gmail.com', 'A', 3, 'eren_yeager-72.jpg', NULL, NULL),
	(58, 'Sasuke', 'uchija', '$2y$10$bTCrFmUyt7d9NuAU5SQiRuVtRIcPOiqhluQJ.a2uZ.QANKndigrTy', 'sasuke@gmail.com', 'A', 2, 'Sasuke-58.jpg', 1, 'lucas'),
	(14, 'Naruto', 'uzumaki', '$2y$10$y9CGVfte4fLUuwGwAWYyyeS/qttSy1EtDcSiFWqGqWBTSnfKATBPy', 'naruto@mail.com', 'A', 2, 'naruto-14.jpg', 1, 'lucas');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
