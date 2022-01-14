<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 25/11/2021
 * @version: 1.0 Realizacion de cLogin
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Controlador del login
 */
if(isset($_REQUEST['volver'])){ //Si el usuario pulsa el boton de volver, mando al usuario a la pagina de inicio publico
    $_SESSION['paginaEnCurso'] = 'iniciopublico'; //Asigno a la pagina en curso la pagina de inicio publico
    header('Location: index.php'); //Redireciono de nuevo a inicio publico
    exit;
}

if (isset($_REQUEST['entrar'])) { //Si le ha dado al boton de enviar valido los datos
    if(validacionFormularios::comprobarAlfabetico($_REQUEST['CodUsuario'], 200, 1, OBLIGATORIO) == null
    && validacionFormularios::validarPassword($_REQUEST['Password'], 8, 1, 1, OBLIGATORIO) == null){ //Valido los datos pasados por teclado
        $oUsuarioValido = UsuarioPDO::validarUsuario($_REQUEST['CodUsuario'], $_REQUEST['Password']); //Compruebo si el usuario existe con la funcion validarUsuario
        if($oUsuarioValido){ //Si el usuario existe
            $oUsuarioValido = UsuarioPDO::registrarUltimaConexion($oUsuarioValido); //Registro la ultima conexion y actualizo el numero de conexiones con el metodo registrarUltimaConexion
            $_SESSION['usuario207DWESLoginLogoutMulticapaPOO'] = $oUsuarioValido; //Guardo en la sesion el contenido del usuario valido
            $_SESSION['paginaEnCurso'] = 'inicioprivado'; //Asigno a la pagina en curso la pagina de inicio privado
            header('Location: index.php'); //Redirecciono a inicio privado
            exit;
        }
    }
}

require_once $vistas['layout'];//Cargo la pagina de login
?>