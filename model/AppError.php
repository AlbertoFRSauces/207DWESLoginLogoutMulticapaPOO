<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 13/01/2022
 * @version: 1.0 Realizacion de AppError
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Clase Error
*/

class AppError{
    private $codError;
    private $descError;
    private $archivoError;
    private $lineaError;
    private $paginaSiguiente;
    
    /**
     * Metodo constructor de la clase AppError
     * @param String $codError Codigo de descripcion del error
     * @param String $descError Descripcion del error
     * @param String $archivoError Enlace del error
     * @param int $lineaError Linea en la que se ha producido el error
     * @param String $paginaSiguiente Pagina siguiente
     */
    function __construct($codError, $descError, $archivoError, $lineaError, $paginaSiguiente) {
        $this->codError = $codError;
        $this->descError = $descError;
        $this->archivoError = $archivoError;
        $this->lineaError = $lineaError;
        $this->paginaSiguiente = $paginaSiguiente;
    }
    /**
     * Metodo get que devuelve el codigo del error
     * @return String
     */
    function getCodError(){
        return $this->codError;
    }
    /**
     * Metodo get que devuelve la descripcion del error
     * @return String
     */
    function getDescError(){
       return $this->descError; 
    }
    /**
     * Metodo get que devuelve el archivo del error
     * @return String
     */
    function getArchivoError(){
       return $this->archivoError; 
    }
    /**
     * Metodo get que devuelve la linea donde se producio el error
     * @return int 
     */
    function getLineaError(){
       return $this->lineaError; 
    }
    /**
     * Metodo get que devuelve la pagina siguiente
     * @return String
     */
    function getPaginaSiguiente(){
       return $this->paginaSiguiente; 
    }
}
?>


