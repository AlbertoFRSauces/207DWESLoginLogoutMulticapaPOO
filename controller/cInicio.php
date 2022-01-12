<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 25/11/2021
 * @version: 1.0 Realizacion de cInicio
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Controlador de inicio
 */
if(isset($_REQUEST['cerrarsesion'])){ //Si el usuario pulsa el boton de cerrar sesion, cierro la sesion y mando al usuario al login de nuevo
    session_unset(); //Elimino la sesion
    header('Location: index.php'); //Redireciono de nuevo al login
    exit;
}

if(isset($_REQUEST['detalle'])){ //Si el usuario logeado pulsa el boton de detalle
    $_SESSION['paginaEnCurso'] = 'detalle'; //Asigno a la pagina en curso la pagina de detalle
    header('Location: index.php'); //Redirecciono a detalle
    exit;
}

$oUsuario = $_SESSION['usuario207DWESLoginLogoutMulticapaPOO'];

$sDescUsuario = $oUsuario->getDescUsuario(); //Variable que contiene la descripcion del usuario loggeado
$iNumConexiones = $oUsuario->getNumConexiones(); //Variable que contiene el numero total de conexiones del usuario loggeado
$sFechaHoraUltimaConexion = $oUsuario->getFechaHoraUltimaConexion(); //Variable que contiene la fecha de la ultima conexion del usuario loggeado

require_once $vistas['layout']; //Cargo la pagina de inicio
?>
