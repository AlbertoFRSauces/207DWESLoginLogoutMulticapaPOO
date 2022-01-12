<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 12/01/2022
 * @version: 1.0 Realizacion de DB
 * @copyright: Copyright (c) 2022, Alberto Fernandez Ramirez
 * Interfaz DB
*/
interface DB{
    /**
     * Ejecutar consulta
     * @param String $sentenciaSQL Sentencia SQL para ejecutar
     * @param Array|null $parametros Parametros que se le pueden pasar a la sentencia
     */
    public static function ejecutarConsulta($sentenciaSQL, $parametros = null);
}