<article class="titulopagina">
    <h2>Inicio</h2>
</article>
<?php //Si el usuario nunca se ha conectado muestro el siguiente mensaje
    ?>
    <h1 class="usuario"><?php echo "Bienvenid@ " . $sDescUsuario ?></h1>
    <h3 class="conexiones"><?php echo "Esta es la " . $iNumConexiones . " vez que te conectas!" ?></h3>
    <h3 class="conexiones"><?php echo "La ultima vez que te conectastes fue " . date('d/m/Y H:i:s', $sFechaHoraUltimaConexion) ?></h3>
    <?php

?>    
<form class="formularioPrograma">
    <input type="submit" value="CERRAR SESION" name="cerrarsesion" class="cerrarsesion"/>
    <input type="submit" value="EDITAR PERFIL" name="editarperfil" class="editarperfil"/>
    <input type="submit" value="DETALLE" name="detalle" class="detalle"/>
</form>
