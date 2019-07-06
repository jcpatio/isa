<!doctype html>
<html>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js" ></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>

<head>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<meta name="author" content="JUAN CARLOS PATIÑO DOVANET">
<link rel="icon" href="img/icono/favicon.ico">
<title>ISA - Interactuacion Sistema Administrativo</title>
<!-- estilos -->
<link href="css/4/bootstrap.min.css" rel="stylesheet">
<link href="css/fontawesome-all.css" rel="stylesheet">
<link href="css/mainAdministrador.css" rel="stylesheet">
<script>
    $(document).ready(function(){
         $(".alert").delay(4000).slideUp(200, function() {
            $(this).remove(); 
        });
    });
</script>
<body>
    <div class="container">
        <?php
        include( 'conexiones/conexion.php' );
        $con = conectar();
        include( 'acciones/mensajesSistema.php' );
        $msg = isset( $_GET[ 'msg' ] ) ? $_GET[ 'msg' ] : null;

        $mensaje = mensajeErrores( $msg );

        ?>
        <p></p>
        <br>

        <form action="acciones/ingresoSitema.php" class="form-signin" method="POST" enctype="multipart/form-data" id="frmLogin">

            <center>
                <img src="img/logos/s.svg" width="100%" height="100%" alt="logo"/>
            </center>

            <br>
            <input type="text" name="usuario" class="form-control" autocomplete="off" placeholder="Usuario" required="" autofocus>
            <input type="password" name="claveUsuario" class="form-control" placeholder="Contraseña" required="">
            <input type="hidden" name="ip" id="ip" value=" <?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <button class="btn btn-outline-success btn-lg btn-block" type="submit">Ingresar <i class="fas fa-sign-in-alt"></i></button>
        </form>

    </div>
    <!-- /container -->
    <footer>
        <center>
            <p style="color: #575859;">Desarrollado por ISA</p>
        </center>
       
    </footer>
</body>
</html>