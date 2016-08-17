-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2016 at 11:22 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a3454855_aboagen`
--

-- --------------------------------------------------------

--
-- Table structure for table `estado_persona`
--

CREATE TABLE `estado_persona` (
  `ID_ESTADO_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_ESTA_PERSO` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_ESTADO_PERSONA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `estado_persona`
--

INSERT INTO `estado_persona` VALUES(1, 'ACTIVO');
INSERT INTO `estado_persona` VALUES(2, 'NO ACTIVO');

-- --------------------------------------------------------

--
-- Table structure for table `gcm_users`
--

CREATE TABLE `gcm_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gcm_regid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `created_at` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gcm_users`
--

INSERT INTO `gcm_users` VALUES(1, 'ca', 'ca', 'APA91bH26Dv9l3g-30Yb', '2016-04-04 15:55:33');
INSERT INTO `gcm_users` VALUES(2, 'camilo', 'camilovalderrama@uni', 'APA91bEUfsNItKBydvpN', '2016-04-04 16:00:12');
INSERT INTO `gcm_users` VALUES(3, 'juan manuel valderra', 'juan@hotmail.con', 'APA91bEqiEcqAK5pRKnk', '2016-04-04 22:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `ID_PERFIL` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_PERFIL` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_PERFIL`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` VALUES(1, 'ADMIN');
INSERT INTO `perfil` VALUES(2, 'ABOGADO');
INSERT INTO `perfil` VALUES(3, 'AUXILIAR');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `ID_PERSONA` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE1` varchar(100) NOT NULL,
  `APELLIDO1` varchar(100) NOT NULL,
  `ID_TIPO_IDEN` varchar(10) NOT NULL,
  `IDENTIFICACION` varchar(15) NOT NULL,
  `ID_PERFIL` int(11) NOT NULL,
  `TELEFONO` varchar(15) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `DIRECCION` varchar(200) NOT NULL,
  `SEXO` varchar(15) NOT NULL,
  `CONTRASENA` varchar(100) NOT NULL,
  `ID_EST_PERSONA` int(11) NOT NULL,
  PRIMARY KEY (`ID_PERSONA`),
  KEY `ID_TIPO_IDEN` (`ID_TIPO_IDEN`),
  KEY `ID_PERFIL` (`ID_PERFIL`),
  KEY `ID_EST_PERSONA` (`ID_EST_PERSONA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` VALUES(30, 'Camilo ', 'Valderrama', 'CC', '1061793514', 2, 'Masculino', '12345', 'Calle 70 an # 7-31', '3143096626', '12345', 2);
INSERT INTO `persona` VALUES(29, 'Juan Manuel', 'Valderrama Rengifo', 'NIT', '1061692947', 2, 'Masculino', '1061', 'calle 70an# 7 31', '3146840199', '1061', 2);

-- --------------------------------------------------------

--
-- Table structure for table `proceso`
--

CREATE TABLE `proceso` (
  `ID_PROCESO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TIPO_PROCESO` int(11) NOT NULL,
  `ID_PERSONA` int(11) NOT NULL,
  `DTE` varchar(100) NOT NULL,
  `DDO` varchar(100) NOT NULL,
  `RADICADO` varchar(200) NOT NULL,
  `FECHA_RADICADO` date NOT NULL,
  PRIMARY KEY (`ID_PROCESO`),
  UNIQUE KEY `RADICADO` (`RADICADO`),
  KEY `ID_TIPO_PROCESO` (`ID_TIPO_PROCESO`),
  KEY `ID_PERSONA` (`ID_PERSONA`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `proceso`
--

INSERT INTO `proceso` VALUES(1, 1, 1, 'FELIPE RENGIFO', 'CAMILO VALDERRAMA', '2016000123', '2016-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_iden`
--

CREATE TABLE `tipo_iden` (
  `ID_TIPO_IDEN` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_TIPO_IDEN` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_TIPO_IDEN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo_iden`
--

INSERT INTO `tipo_iden` VALUES(1, 'C.C.');
INSERT INTO `tipo_iden` VALUES(2, 'NIT');
INSERT INTO `tipo_iden` VALUES(3, 'C.E');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_proceso`
--

CREATE TABLE `tipo_proceso` (
  `ID_TIPO_PROCESO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_TIPO_PROCESO` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_TIPO_PROCESO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tipo_proceso`
--

INSERT INTO `tipo_proceso` VALUES(1, 'EJECUTIVO');
INSERT INTO `tipo_proceso` VALUES(2, 'VERBAL ORDINARIO');
INSERT INTO `tipo_proceso` VALUES(3, 'HIPOTECARIO');
INSERT INTO `tipo_proceso` VALUES(4, 'DIVORCIO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `apellido` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 'camilo', 'valderrama', 'c_valderrama02@hotma', '1234');
INSERT INTO `users` VALUES(2, 'juan', 'valderrama', 'juan277@hotmail.com', '123');
INSERT INTO `users` VALUES(3, 'blanca ', 'rengifo', 'blanca10@hotmail.com', 'blanca');
INSERT INTO `users` VALUES(4, 'rafa', 'valderrama', 'rafa@gmail.com', '111');
INSERT INTO `users` VALUES(5, 'sofia', 'valderrama', 'sofia@gmail.com', '123');
INSERT INTO `users` VALUES(19, 'laura', 'rengifo', 'laura@hotmail.com', '1234');
INSERT INTO `users` VALUES(22, 'maria', 'lopez', 'maria@hotmail.com', '12321');
INSERT INTO `users` VALUES(13, 'camilo', 'valderrama rengifo', 'c_valde@gmail.com', 'camilo');
INSERT INTO `users` VALUES(14, 'sofia', 'valderrama', 'sofia@gmail.com', '1061793514');
INSERT INTO `users` VALUES(29, 'Felipe ', 'Rengifo', 'felipe@hotmail.com', '1234');
INSERT INTO `users` VALUES(23, 'tatiana', 'rengifo', 'tatiana@gmail.com', 'tatiana');
INSERT INTO `users` VALUES(25, 'daniela', 'velez', 'dani@hotmail.com', '1234');
INSERT INTO `users` VALUES(26, 'juan', 'valderrama', 'juanma277@hotmail.com', '1061');
INSERT INTO `users` VALUES(28, 'Camilo ', 'Valderrama', 'camilovalderrama@unimayor.edu.co', 'sofia16');