<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 12/01/2022
 * @version: 1.0 Realizacion de UsuarioDB
 * @copyright: Copyright (c) 2022, Alberto Fernandez Ramirez
 * Interfaz UsuarioDB
*/
interface UsuarioDB{
    /**
     * Validar datos del usuario en la base de datos
     * @param String $codUsuario Codigo del usuario a validar
     * @param String $password Password del usuario a validar
     */
    public static function validarUsuario($codUsuario, $password);
}
