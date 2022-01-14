<?php
/*
 * @author: Alberto Fernandez Ramirez
 * @since: 21/12/2021
 * @version: 1.0 Realizacion de UsuarioPDO
 * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
 * Clase UsuarioPDO que implementa la interfaz UsuarioDB
*/
class UsuarioPDO implements UsuarioDB{
    /**
     * Validar datos del usuario en la base de datos
     * @param String $codUsuario Codigo del usuario a validar
     * @param String $password Password del usuario a validar
     * @return \Usuario|null Devuelvo el objeto usuario con todo el contenido si existe en la base de datos,
     * se actualizaran las conexiones sumando una
     */
    public static function validarUsuario($codUsuario, $password){
        $oUsuario = null; // inicializo la variable a null, que tendrá el objeto de clase usuario si existe el usuario
        
        //Consulta SQL para comprobar si existe el usuario
        $consulta = <<<CONSULTA
            SELECT * FROM T01_Usuario 
            WHERE T01_CodUsuario='{$codUsuario}' 
            AND T01_Password=SHA2("{$codUsuario}{$password}", 256); 
        CONSULTA;
        
        $resultado = DBPDO::ejecutarConsulta($consulta); //Ejecuto la consulta
        
        if($resultado->rowCount()>0){ // si la consulta me devuleve algun resultado es que existe el usuario
            $oUsuario = $resultado->fetchObject(); // Guardo en la variable el resultado de la consulta en forma de objeto
            
            if($oUsuario){ //Instancio un nuevo objeto usuario con todos sus datos
                $oUsuario = new Usuario($oUsuario->T01_CodUsuario, $oUsuario->T01_Password, $oUsuario->T01_DescUsuario, $oUsuario->T01_NumConexiones, $oUsuario->T01_FechaHoraUltimaConexion, $oUsuario->T01_FechaHoraUltimaConexionAnterior, $oUsuario->T01_ImagenUsuario, $oUsuario->T01_Perfil);
            }
        }
        return $oUsuario;
    }
    
    /**
     * Registrar la ultima conexion del usuario y añadir una nueva
     * @param Object $oUsuario Contenido del objeto usuario
     * @return PDOStatement Devuelve el resultado de la consulta
     */
    public static function registrarUltimaConexion($oUsuario) {
        $oUsuario->setNumConexiones($oUsuario->getNumConexiones()+1);
        $oUsuario->setFechaHoraUltimaConexionAnterior($oUsuario->getFechaHoraUltimaConexion());
        $consultaActualizacionFechaUltimaConexion = <<<CONSULTA
            UPDATE T01_Usuario 
            SET T01_NumConexiones=T01_NumConexiones+1, T01_FechaHoraUltimaConexion=unix_timestamp() 
            WHERE T01_CodUsuario='{$oUsuario->getCodUsuario()}';
        CONSULTA;
        DBPDO::ejecutarConsulta($consultaActualizacionFechaUltimaConexion);
        
        return $oUsuario;
    }
}
?>