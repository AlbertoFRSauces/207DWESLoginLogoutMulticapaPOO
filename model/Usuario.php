<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 21/12/2021
 * @version: 1.0 Realizacion de Usuario
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Clase Usuario
*/

class Usuario{
    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaHoraUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $imagenUsuario;
    private $perfil;
    
    /**
     * Metodo constructor de la clase Usuario
     * @param String $codUsuario Codigo del usuario
     * @param String $password Password del usuario
     * @param String $descUsuario Descripcion del usuario
     * @param int $numConexiones Numero de conexiones del usuario
     * @param int $fechaHoraUltimaConexion Fecha y hora de la ultima conexion del usuario
     * @param int $fechaHoraUltimaConexionAnterior Anterior del usuario
     * @param String $imagenUsuario Imagen del usuario
     * @param String $perfil Tipo de perfil del usuario
     */
    function __construct($codUsuario,$password,$descUsuario,$numConexiones,$fechaHoraUltimaConexion,$fechaHoraUltimaConexionAnterior,$imagenUsuario,$perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numConexiones = $numConexiones;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->imagenUsuario = $imagenUsuario;
        $this->perfil = $perfil;
    }
    
    /**
     * Metodo get que devuelve el codigo del usuario
     * @return String codigo del usuario 
     */
    function getCodUsuario(){
        return $this->codUsuario;
    }
    /**
     * Metodo get que devuelve la password del usuario
     * @return String password del usuario
     */
    function getPassword() {
        return $this->password;
    }
    /**
     * Metodo get que devuelve la descripcion del usuario
     * @return String descripcion del usuario
     */
    function getDescUsuario() {
        return $this->descUsuario;
    }
    /**
     * Metodo get que devuelve el numero de conexiones del usuario
     * @return int conexiones del usuario
     */
    function getNumConexiones() {
        return $this->numConexiones;
    }
    /**
     * Metodo get que devuelve la fecha y hora de la ultima conexion del usuario
     * @return int fecha y hora de la ultima conexion del usuario
     */
    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }
    /**
     * Metodo get que devuelve la fecha y hora de la ultima conexion anterior del usuario
     * @return int fecha y hora de la ultima conexion anterior del usuario
     */
    function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }
    /**
     * Metodo get que devuelve la imagen del usuario
     * @return String imagen del usuario
     */
    function getImagenUsuario(){
        return $this->imagenUsuario;
    }
    /**
     * Metodo get que devuelve el perfil del usuario
     * @return String perfil del usuario
     */
    function getPerfil() {
        return $this->perfil;
    }
    
    /**
     * Metodo set que cambia el valor del atributo $codUsuario
     * @param String $codUsuario Nuevo codigo del usuario
     */
    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }
    /**
     * Metodo set que cambia el valor del atributo $password
     * @param String $password Nueva passsword del usuario
     */
    function setPassword($password) {
        $this->password = $password;
    }
    /**
     * Metodo set que cambia el valor del atributo $descUsuario
     * @param String $descUsuario Nueva descripcion del usuario
     */
    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }
    /**
     * Metodo set que cambia el valor del atributo $numConexiones
     * @param int $numConexiones Nuevo numero de conexiones del usuario
     */
    function setNumConexiones($numConexiones) {
        $this->numConexiones = $numConexiones;
    }
    /**
     * Metodo set que cambia el valor del atributo $fechaHoraUltimaConexion
     * @param int $fechaHoraUltimaConexion Nueva ultima conexion del usuario
     */
    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }
    /**
     * Metodo set que cambia el valor del atributo $fechaHoraUltimaConexionAnterior
     * @param int $fechaHoraUltimaConexionAnterior Nueva ultima conexion anterior del usuario
     */
    function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior) {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }
    /**
     * Metodo set que cambia el valor del atributo $imagenUsuario
     * @param String $imagenUsuario Nueva imagen del usuario
     */
    function imagenUsuario($imagenUsuario){
        $this->imagenUsuario = $imagenUsuario;
    }
    /**
     * Metodo set que cambia el valor del atributo $perfil
     * @param String $perfil Nuevo perfil del usuario
     */
    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
}
?>
