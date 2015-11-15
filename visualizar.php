<?php 
    require './clases/AutoCarga.php';
   
    $sesion = new Session();
    $usuario = $sesion->getUser();
    $nombreUsuario=$usuario->getNSS();
    $subir=new Multiupload();
    $ruta= "Usuarios/User_";
    $dniUsuario=$usuario->getDni();
    
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/visualizar.js"></script>
         <link rel="stylesheet" type="text/css" href="estilo/estilos.css" />
    </head>
    <body>
        <div id="contenedor">
        <section>
           <!--<h4> archivos subidos correctamente</h4>-->
           <h2>Estas son las imagenes del usuario<br/></h2>
           <h3>NSS: <?php echo $nombreUsuario?></h3>
           <h3>DNI: <?php echo $dniUsuario?></h3>
        <ul id="lista">
            <?php 
            Imagenes::verImagen($nombreUsuario,$ruta);
            ?>
        </ul>
         <p><img src="" id="image" width="300px" height="300px"></p>
       </section>
       
        </div>
    </body>
</html>
