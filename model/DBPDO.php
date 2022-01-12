<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 21/12/2021
 * @version: 1.0 Realizacion de DBPDO
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Clase DBPDO que implementa la interfaz DB
*/
class DBPDO implements DB{
    /**
     * Ejecutar consulta contra la base de datos
     * @param String $sentenciaSQL Sentencia SQL para ejecutar
     * @param Array|null $parametros Parametros que se le pueden pasar a la sentencia, puede ser un array o null
     * @return PDOStatement|null Devuelvo el resultado de la consulta
     */
    public static function ejecutarConsulta($sentenciaSQL, $parametros = null){
        try {
            $DB207DWESLoginLogoutMulticapaPOO = new PDO(HOST, USER, PASSWORD);//Hago la conexion con la base de datos
            $DB207DWESLoginLogoutMulticapaPOO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Establezco el atributo para la aparicion de errores con ATTR_ERRMODE y le pongo que cuando haya un error se lance una excepcion con ERRMODE_EXCEPTION
            $resultadoConsulta = $DB207DWESLoginLogoutMulticapaPOO->prepare($sentenciaSQL); // Preparo la consulta antes de ejecutarla
            $resultadoConsulta->execute($parametros);//Ejecuto la consulta con el array de parametros
            return $resultadoConsulta; //Devuelvo el resultado de la consulta
        }catch(PDOException $excepcion){//Codigo que se ejecuta si hay algun error
            $resultadoConsulta = null; //Destruyo la consulta
            $errorExcepcion = $excepcion->getCode();//Obtengo el codigo del error y lo almaceno en la variable errorException
            $mensajeException = $excepcion->getMessage();//Obtengo el mensaje del error y lo almaceno en la variable mensajeException
            echo "<p style='color: red'>Codigo del error: </p>" . $errorExcepcion;//Muestro el codigo del error
            echo "<p style='color: red'>Mensaje del error: </p>" . $mensajeException;//Muestro el mensaje del error
        } finally{
            unset($DB207DWESLoginLogoutMulticapaPOO);//Cierro la conexion
        }
    }
}
?>