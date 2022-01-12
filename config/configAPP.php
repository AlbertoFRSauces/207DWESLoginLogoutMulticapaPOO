<?php
    require_once 'core/libreriaValidacion.php';

    require_once 'model/DB.php';
    require_once 'model/UsuarioDB.php';
    require_once 'model/Usuario.php';
    require_once 'model/UsuarioPDO.php';
    require_once 'model/DBPDO.php';
    
    define("OBLIGATORIO", 1);
    
    $controladores = [
        "login" => "controller/cLogin.php",
        "inicio" => "controller/cInicio.php",
        "detalle" => "controller/cDetalle.php"
    ];
    $vistas = [
        "layout" => "view/layout.php",
        "login" => "view/vLogin.php",
        "inicio" => "view/vInicio.php",
        "detalle" => "view/vDetalle.php"
    ]
?>
