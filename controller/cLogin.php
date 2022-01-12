<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 25/11/2021
 * @version: 1.0 Realizacion de cLogin
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Controlador del login
 */
if (isset($_REQUEST['entrar'])) { //Si le ha dado al boton de enviar valido los datos
    if(validacionFormularios::comprobarAlfabetico($_REQUEST['CodUsuario'], 200, 1, OBLIGATORIO) == null
    && validacionFormularios::validarPassword($_REQUEST['Password'], 8, 1, 1, OBLIGATORIO) == null){ //Valido los datos pasados por teclado
        $oUsuarioValido = UsuarioPDO::validarUsuario($_REQUEST['CodUsuario'], $_REQUEST['Password']); //Compruebo si el usuario existe con la funcion validarUsuario
        if($oUsuarioValido){ //Si el usuario existe
            $_SESSION['usuario207DWESLoginLogoutMulticapaPOO'] = $oUsuarioValido; //Guardo en la sesion el contenido del usuario
            $_SESSION['paginaEnCurso'] = 'inicio'; //Asigno a la pagina en curso la pagina de inicio
            header('Location: index.php'); //Redirecciono a inicio
            exit;
        }
    }
}

require_once $vistas['layout'];//Cargo la pagina de login
?>