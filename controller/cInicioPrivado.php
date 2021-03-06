<?php
/*
 * 
 * @package: LoginLogout
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

if(isset($_REQUEST['editarperfil'])){ //Si el usuario pulsa el boton de editarperfil, mando al usuario a la pagina de MiCuenta
    $_SESSION['paginaAnterior'] = 'inicioprivado'; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'micuenta'; //Asigno a la pagina en curso la pagina de MiCuenta
    header('Location: index.php'); //Redireciono de nuevo a MiCuenta
    exit;
}

if(isset($_REQUEST['mtodepartamentos'])){ //Si el usuario pulsa el boton de mtodepartamentos, mando al usuario a la pagina de WorkingProgress
    $_SESSION['paginaAnterior'] = 'inicioprivado'; //Guardo la pagina actual en paginaAnterior para recordarla
    $_SESSION['paginaEnCurso'] = 'wip'; //Asigno a la pagina en curso la pagina de working progress
    header('Location: index.php'); //Redireciono de nuevo al login
    exit;
}

if(isset($_REQUEST['detalle'])){ //Si el usuario logeado pulsa el boton de detalle
    $_SESSION['paginaEnCurso'] = 'detalle'; //Asigno a la pagina en curso la pagina de detalle
    header('Location: index.php'); //Redirecciono a detalle
    exit;
}

$sDescUsuario = $_SESSION['usuario207DWESLoginLogoutMulticapaPOO']->getDescUsuario(); //Variable que contiene la descripcion del usuario loggeado
$iNumConexiones = $_SESSION['usuario207DWESLoginLogoutMulticapaPOO']->getNumConexiones(); //Variable que contiene el numero total de conexiones del usuario loggeado
$sFechaHoraUltimaConexionAnterior = $_SESSION['usuario207DWESLoginLogoutMulticapaPOO']->getFechaHoraUltimaConexionAnterior(); //Variable que contiene la fecha de la ultima conexion del usuario loggeado

require_once $vistas['layout']; //Cargo la pagina de inicio privado
?>
