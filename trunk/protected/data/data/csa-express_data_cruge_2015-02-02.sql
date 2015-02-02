-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-02-2015 a las 09:22:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `csa-express`
--

--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(3, NULL, 'N;', 'ADMINISTRACION'),
(4, NULL, 'N;', 'ADMINISTRACION'),
(5, NULL, 'N;', 'LOGISTICA'),
(6, NULL, 'N;', 'LOGISTICA');

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_agencia_admin', 0, '', NULL, 'N;'),
('action_agencia_create', 0, '', NULL, 'N;'),
('action_agencia_delete', 0, '', NULL, 'N;'),
('action_agencia_update', 0, '', NULL, 'N;'),
('action_barrio_admin', 0, '', NULL, 'N;'),
('action_barrio_ajaxGetBarriosByParroquia', 0, '', NULL, 'N;'),
('action_barrio_create', 0, '', NULL, 'N;'),
('action_barrio_update', 0, '', NULL, 'N;'),
('action_ciudad_admin', 0, '', NULL, 'N;'),
('action_ciudad_ajaxGetCiudadesByCiudad', 0, '', NULL, 'N;'),
('action_ciudad_ajaxGetCiudadesByProvincia', 0, '', NULL, 'N;'),
('action_ciudad_create', 0, '', NULL, 'N;'),
('action_ciudad_update', 0, '', NULL, 'N;'),
('action_dashboard_index', 0, '', NULL, 'N;'),
('action_parroquia_admin', 0, '', NULL, 'N;'),
('action_parroquia_ajaxGetParroquiasbyCiudad', 0, '', NULL, 'N;'),
('action_parroquia_create', 0, '', NULL, 'N;'),
('action_parroquia_update', 0, '', NULL, 'N;'),
('action_persona_admin', 0, '', NULL, 'N;'),
('action_persona_create', 0, '', NULL, 'N;'),
('action_productoCategoria_admin', 0, '', NULL, 'N;'),
('action_productoCategoria_create', 0, '', NULL, 'N;'),
('action_productoCategoria_delete', 0, '', NULL, 'N;'),
('action_productoCategoria_update', 0, '', NULL, 'N;'),
('action_producto_admin', 0, '', NULL, 'N;'),
('action_producto_create', 0, '', NULL, 'N;'),
('action_producto_delete', 0, '', NULL, 'N;'),
('action_producto_update', 0, '', NULL, 'N;'),
('action_provincia_admin', 0, '', NULL, 'N;'),
('action_provincia_create', 0, '', NULL, 'N;'),
('action_provincia_update', 0, '', NULL, 'N;'),
('action_sucursal_admin', 0, '', NULL, 'N;'),
('action_sucursal_create', 0, '', NULL, 'N;'),
('action_sucursal_delete', 0, '', NULL, 'N;'),
('action_sucursal_update', 0, '', NULL, 'N;'),
('action_trayectoriaCheckpoint_create', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_admin', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_create', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_delete', 0, '', NULL, 'N;'),
('action_trayectoriaEtapa_update', 0, '', NULL, 'N;'),
('action_trayectoriaProducto_admin', 0, '', NULL, 'N;'),
('action_trayectoriaProducto_create', 0, '', NULL, 'N;'),
('action_trayectoriaProducto_update', 0, '', NULL, 'N;'),
('action_trayectoria_admin', 0, '', NULL, 'N;'),
('action_trayectoria_ajaxGetTrayectoriasbyCiudades', 0, '', NULL, 'N;'),
('action_trayectoria_create', 0, '', NULL, 'N;'),
('action_trayectoria_update', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
('action_ui_rbacajaxassignment', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_sessionadmindelete', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('ADMINISTRACION', 2, 'Permisos de admin', '', 'N;'),
('Cruge.ui.*', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, 'C:\\wamp\\www\\csa-express\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 98', NULL, 'N;'),
('LOGISTICA', 2, 'Permisos de logística', '', 'N;'),
('tarea_administracion', 1, '', '', 'N;'),
('tarea_logistica', 1, '', '', 'N;');

--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('tarea_administracion', 'action_agencia_admin'),
('tarea_administracion', 'action_agencia_create'),
('tarea_administracion', 'action_agencia_delete'),
('tarea_administracion', 'action_agencia_update'),
('tarea_administracion', 'action_barrio_admin'),
('tarea_administracion', 'action_barrio_ajaxGetBarriosByParroquia'),
('tarea_administracion', 'action_barrio_create'),
('tarea_administracion', 'action_barrio_update'),
('tarea_administracion', 'action_ciudad_admin'),
('tarea_administracion', 'action_ciudad_ajaxGetCiudadesByCiudad'),
('tarea_logistica', 'action_ciudad_ajaxGetCiudadesByCiudad'),
('tarea_administracion', 'action_ciudad_ajaxGetCiudadesByProvincia'),
('tarea_administracion', 'action_ciudad_create'),
('tarea_administracion', 'action_ciudad_update'),
('tarea_administracion', 'action_dashboard_index'),
('tarea_logistica', 'action_dashboard_index'),
('tarea_administracion', 'action_parroquia_admin'),
('tarea_administracion', 'action_parroquia_ajaxGetParroquiasbyCiudad'),
('tarea_administracion', 'action_parroquia_create'),
('tarea_administracion', 'action_parroquia_update'),
('tarea_administracion', 'action_persona_admin'),
('tarea_logistica', 'action_persona_admin'),
('tarea_administracion', 'action_persona_create'),
('tarea_administracion', 'action_productoCategoria_admin'),
('tarea_logistica', 'action_productoCategoria_admin'),
('tarea_administracion', 'action_productoCategoria_create'),
('tarea_logistica', 'action_productoCategoria_create'),
('tarea_administracion', 'action_productoCategoria_delete'),
('tarea_logistica', 'action_productoCategoria_delete'),
('tarea_administracion', 'action_productoCategoria_update'),
('tarea_logistica', 'action_productoCategoria_update'),
('tarea_administracion', 'action_producto_admin'),
('tarea_logistica', 'action_producto_admin'),
('tarea_administracion', 'action_producto_create'),
('tarea_logistica', 'action_producto_create'),
('tarea_administracion', 'action_producto_delete'),
('tarea_logistica', 'action_producto_delete'),
('tarea_administracion', 'action_producto_update'),
('tarea_logistica', 'action_producto_update'),
('tarea_administracion', 'action_provincia_admin'),
('tarea_administracion', 'action_provincia_create'),
('tarea_administracion', 'action_provincia_update'),
('tarea_administracion', 'action_sucursal_admin'),
('tarea_administracion', 'action_sucursal_create'),
('tarea_administracion', 'action_sucursal_delete'),
('tarea_administracion', 'action_sucursal_update'),
('tarea_administracion', 'action_trayectoriaCheckpoint_create'),
('tarea_logistica', 'action_trayectoriaCheckpoint_create'),
('tarea_administracion', 'action_trayectoriaEtapa_admin'),
('tarea_administracion', 'action_trayectoriaEtapa_create'),
('tarea_administracion', 'action_trayectoriaEtapa_delete'),
('tarea_administracion', 'action_trayectoriaEtapa_update'),
('tarea_administracion', 'action_trayectoriaProducto_admin'),
('tarea_logistica', 'action_trayectoriaProducto_admin'),
('tarea_administracion', 'action_trayectoriaProducto_create'),
('tarea_logistica', 'action_trayectoriaProducto_create'),
('tarea_administracion', 'action_trayectoriaProducto_update'),
('tarea_logistica', 'action_trayectoriaProducto_update'),
('tarea_administracion', 'action_trayectoria_admin'),
('tarea_logistica', 'action_trayectoria_admin'),
('tarea_administracion', 'action_trayectoria_ajaxGetTrayectoriasbyCiudades'),
('tarea_logistica', 'action_trayectoria_ajaxGetTrayectoriasbyCiudades'),
('tarea_administracion', 'action_trayectoria_create'),
('tarea_logistica', 'action_trayectoria_create'),
('tarea_administracion', 'action_trayectoria_update'),
('tarea_administracion', 'action_ui_editprofile'),
('tarea_administracion', 'action_ui_fieldsadminlist'),
('tarea_administracion', 'action_ui_rbacajaxassignment'),
('tarea_administracion', 'action_ui_rbacajaxsetchilditem'),
('tarea_administracion', 'action_ui_rbacauthitemchilditems'),
('tarea_administracion', 'action_ui_rbacauthitemcreate'),
('tarea_administracion', 'action_ui_rbacauthitemdelete'),
('tarea_administracion', 'action_ui_rbacauthitemupdate'),
('tarea_administracion', 'action_ui_rbaclistops'),
('tarea_administracion', 'action_ui_rbaclistroles'),
('tarea_administracion', 'action_ui_rbaclisttasks'),
('tarea_administracion', 'action_ui_rbacusersassignments'),
('tarea_administracion', 'action_ui_sessionadmin'),
('tarea_administracion', 'action_ui_systemupdate'),
('tarea_administracion', 'action_ui_usermanagementadmin'),
('tarea_administracion', 'action_ui_usermanagementcreate'),
('tarea_administracion', 'action_ui_usermanagementupdate'),
('tarea_administracion', 'admin'),
('tarea_administracion', 'Cruge.ui.*'),
('ADMINISTRACION', 'tarea_administracion'),
('LOGISTICA', 'tarea_logistica');

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 800, 10, 1, -1, -1, 0, 0, 0, 0, NULL, 0, '', '', 1);

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1422867848, 'admin', 'alexish1993@gmail.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(3, 1422867963, NULL, 1422868862, 'ahidalgo', 'ahidalgo@csaexpress.com', '123456', 'cd6bafab44e17d786fe2f1bfd9144ddd', 1, 0, 0),
(4, 1422867994, NULL, NULL, 'csarsoza', 'csarsoza@csaexpress.com', '123456', 'c3cfa03d2023297f3aa3b22bb0d1d9d7', 1, 0, 0),
(5, 1422868018, NULL, 1422868885, 'aportilla', 'aportilla@csaexpress.com', '123456', '6e155a10bee6174685523fc1e8780fe0', 1, 0, 0),
(6, 1422868034, NULL, NULL, 'esaa', 'esaa@csaexpress.com', '123456', '22cf7ee1abb7227b9d26653ff8927cd7', 1, 0, 0);

--
-- Volcado de datos para la tabla `trayectoria_etapa`
--

INSERT INTO `trayectoria_etapa` (`id`, `nombre`, `peso`, `estado`) VALUES
(1, 'Embarcación', 1, 'ACTIVO'),
(2, 'En Trayecto', 2, 'ACTIVO'),
(3, 'Finalizada', 3, 'ACTIVO');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
